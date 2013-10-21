<?php
/*
Plugin Name: Password Policy
Version: 2.5.0
Description: Renforcer la sécurité des mots de passe - Enforce password security
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=
Author: Eric
Author URI: http://www.infernoweb.net
*/

/* History:  PP_PATH.'Changelog.txt.php' */

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!defined('PP_PATH')) define('PP_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

global $conf;

include_once (PP_PATH.'include/functions.inc.php');

load_language('plugin.lang', PP_PATH);
$conf_PP = unserialize($conf['PasswordPolicy']);


// Plugin administration panel
// ---------------------------
add_event_handler('get_admin_plugin_menu_links', 'PP_admin_menu');

// Features and controls on user connexion
// ---------------------------------------
add_event_handler('loc_begin_index', 'PP_Init');

// Check users registration
// ------------------------
add_event_handler('register_user_check', 'PP_RegistrationCheck', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);

if (script_basename() == 'profile')
{
  add_event_handler('loc_begin_profile', 'PP_Profile_Init');
}

// Redirection to profile page
// ---------------------------
add_event_handler('login_success', 'PP_LoginTasks',EVENT_HANDLER_PRIORITY_NEUTRAL, 1);

// Add new feature in user_list - Password Reset
// ---------------------------------------------
if (isset($conf_PP['PWDRESET']) and $conf_PP['PWDRESET'] == 'true')
{
  // Add new column on user_list
  // ---------------------------
  add_event_handler('loc_visible_user_list', 'PP_loc_visible_user_list');

  // Add prefilter on user_list
  // --------------------------
  add_event_handler('loc_begin_admin', 'PP_PwdReset_Action',60);

  /**
   * PP_PwdReset_Action - Triggered on PP_PwdReset_Action
   * Handle password reset action in user_list.php
   */
  function PP_PwdReset_Action()
  {
    global $conf, $user, $template, $lang, $errors;

    $page['errors'] = array();
    $page['infos'] = array();
    $page['filtered_users'] = array();

    if (isset($_POST['pwdreset']))
    {
      $collection = array();

      switch ($_POST['target'])
      {
        case 'all' :
        {
          foreach($page['filtered_users'] as $local_user)
          {
            array_push($collection, $local_user['id']);
          }
          break;
        }
        case 'selection' :
        {
          if (isset($_POST['selection']))
          {
            $collection = $_POST['selection'];
          }
          break;
        }
      }

      if (count($collection) == 0)
      {
        array_push($page['errors'], l10n('Select at least one user'));
      }
    }

    if (isset($_POST['pwdreset']) and count($collection) > 0)
    {
      if (in_array($conf['guest_id'], $collection))
      {
        array_push($page['errors'], l10n('PP_Guest cannot be pwdreset'));
        $template->append('errors', l10n('PP_Guest cannot be pwdreset'));
      }
      if (($conf['guest_id'] != $conf['default_user_id']) and
        in_array($conf['default_user_id'], $collection))
      {
        array_push($page['errors'], l10n('PP_Default user cannot be pwdreset'));
        $template->append('errors', l10n('PP_Default user cannot be pwdreset'));
      }
      if (in_array($conf['webmaster_id'], $collection))
      {
        array_push($page['errors'], l10n('PP_Webmaster cannot be pwdreset'));
        $template->append('errors', l10n('PP_Webmaster cannot be pwdreset'));
      }
      if (in_array($user['id'], $collection))
      {
        array_push($page['errors'], l10n('PP_You cannot pwdreset your account'));
        $template->append('errors', l10n('PP_You cannot pwdreset your account'));
      }

      // Generic accounts exclusion (including Adult_Content generic users)
      // ------------------------------------------------------------------
      $query ='
SELECT u.id
FROM '.USERS_TABLE.' AS u
INNER JOIN '.USER_INFOS_TABLE.' AS ui
  ON u.id = ui.user_id
WHERE ui.status = "generic"
;';

	    $result = pwg_query($query);

      while ($row = pwg_db_fetch_assoc($result))
      {
        if (in_array($row['id'], $collection))
        {
          array_push($page['errors'], l10n('PP_Generic cannot be pwdreset'));
          $errors = l10n('PP_Generic cannot be pwdreset');
        }
      }

      // Admins accounts exclusion
      // --------------------------
      $query ='
SELECT u.id
FROM '.USERS_TABLE.' AS u
INNER JOIN '.USER_INFOS_TABLE.' AS ui
  ON u.id = ui.user_id
WHERE ui.status = "admin"
;';

	    $result = pwg_query($query);

      while ($row = pwg_db_fetch_assoc($result))
      {
        if (in_array($row['id'], $collection))
        {
          array_push($page['errors'], l10n('PP_Admins cannot be pwdreset'));
          $errors = l10n('PP_Admins cannot be pwdreset');
        }
      }

      $template->append('errors', $errors);

      if (count($page['errors']) == 0)
      {
        if (isset($_POST['confirm_pwdreset']) and 1 == $_POST['confirm_pwdreset'])
        {
          foreach ($collection as $user_id)
          {
            PP_Set_PwdReset($user_id);
          }
          array_push(
            $page['infos'],
            l10n_dec(
              'PP %d user pwdreseted', 'PP %d users pwdreseted',
              count($collection)
              )
            );
          $template->append('infos', l10n_dec(
              'PP %d user pwdreseted', 'PP %d users pwdreseted',
              count($collection)));
          foreach ($page['filtered_users'] as $filter_key => $filter_user)
          {
            if (in_array($filter_user['id'], $collection))
            {
              unset($page['filtered_users'][$filter_key]);
            }
          }
        }
        else
        {
          array_push($page['errors'], l10n('PP_You need to confirm pwdreset'));
          $template->append('errors', l10n('PP_You need to confirm pwdreset'));
        }
      }
    }
    $template->set_prefilter('user_list', 'PP_PwdReset_Prefilter');
  }

  /**
   * PP_PwdReset_Prefilter
   * Adds action field for password reset in user_list.tpl
   */
  function PP_PwdReset_Prefilter($content, &$smarty)
  {
    $search = '
<fieldset>
  <legend>{\'Deletions\'|@translate}</legend>
  <label><input type="checkbox" name="confirm_deletion" value="1"> {\'confirm\'|@translate}</label>
  <input class="submit" type="submit" value="{\'Delete selected users\'|@translate}" name="delete">
</fieldset>
';
 
    $addon = '
<fieldset>
  <legend>{\'PP_PwdReset\'|@translate}</legend>
  <label><input type="checkbox" name="confirm_pwdreset" value="1"> {\'confirm\'|@translate}</label>
  <input class="submit" type="submit" value="{\'PP_Password reset selected users\'|@translate}" name="pwdreset">
</fieldset>
';

    $replacement = $addon.$search;

    return str_replace($search, $replacement, $content);
  }
}


// Security option : Count of login failure and lock account after x attempt
// -------------------------------------------------------------------------
add_event_handler('login_failure', 'PP_log_fail');
?>