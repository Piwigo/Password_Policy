<?php

global $user, $lang, $conf, $errors;

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

if (!defined('PP_PATH')) define('PP_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', true);

include_once (PHPWG_ROOT_PATH.'/include/constants.php');

load_language('plugin.lang', PP_PATH);


// +-----------------------------------------------------------------------+
// |                   Variables initialization                            |
// +-----------------------------------------------------------------------+
$page['global'] = array();
$error = array();

$PP_Password_Test_Score = 0;

// +-----------------------------------------------------------------------+
// |                      Getting plugin version                           |
// +-----------------------------------------------------------------------+
$plugin =  PPInfos(PP_PATH);
$version = $plugin['version'];


// +----------------------------------------------------------+
// |            FCK Editor for email text fields              |
// +----------------------------------------------------------+
$toolbar = 'Basic';
$width = '750px';
$height = '300px';
$areas = array();
array_push($areas,'PP_CustomLockMsg');

if (function_exists('set_fckeditor_instance'))
{
  $fcke_config = unserialize($conf['FCKEditor']);
  foreach($areas as $area)
  {
    if (!isset($fcke_config[$area]))
    {
      $fcke_config[$area] = false;
    }
  }
  $conf['FCKEditor'] = serialize($fcke_config);

  set_fckeditor_instance($areas, $toolbar, $width, $height);
}


  if (isset($_POST['submit']) and isset($_POST['PP_Password_Enforced']) and isset($_POST['PP_AdminPassword_Enforced']) and isset($_POST['PP_PwdReset']) and isset($_POST['PP_LogFailedPassw']))
  {
    $_POST['PP_CustomLockMsg'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['PP_CustomLockMsg'])));
    // Save global PP configuration
    // -----------------------------
    $newconf_PP['PPVersion'] = $version;
    $newconf_PP['PASSWORDENF'] = (isset($_POST['PP_Password_Enforced']) ? $_POST['PP_Password_Enforced'] : 'false');
    $newconf_PP['PASSWORD_SCORE'] = (isset($_POST['PP_Password_Score']) ? $_POST['PP_Password_Score'] : '100');
    $newconf_PP['ADMINPASSWENF'] = (isset($_POST['PP_AdminPassword_Enforced']) ? $_POST['PP_AdminPassword_Enforced'] : 'false');
    $newconf_PP['PWDRESET'] = (isset($_POST['PP_PwdReset']) ? $_POST['PP_PwdReset'] : 'false');
    $newconf_PP['LOGFAILBLOCK'] = (isset($_POST['PP_LogFailedPassw']) ? $_POST['PP_LogFailedPassw'] : 'false');
    $newconf_PP['NBLOGFAIL'] = (isset($_POST['PP_NbFailedPassw']) ? $_POST['PP_NbFailedPassw'] : '0');
    $newconf_PP['USRLOCKEDTXT'] = (isset($_POST['PP_CustomLockMsg']) ? $_POST['PP_CustomLockMsg'] : l10n('PP_User_Account_Locked_Txt'));

    $conf['PasswordPolicy'] = serialize($newconf_PP);

    conf_update_param('PasswordPolicy', pwg_db_real_escape_string($conf['PasswordPolicy'])); 

    array_push($page['infos'], l10n('PP_save_config'));
  }

  // Testing password enforcement
  // ----------------------------
  if (isset($_POST['PasswordTest']) and isset($_POST['PP_Password_Test']) and !empty($_POST['PP_Password_Test']))
  {
    $PP_Password_Test_Score = PP_testpassword($_POST['PP_Password_Test']);
  }
  else if (isset($_POST['PasswordTest']) and empty($_POST['PP_Password_Test']))
  {
    array_push($page['errors'], l10n('PP_Error_Password_Mandatory'));
  }

  $conf_PP = unserialize($conf['PasswordPolicy']);

  // ------------------------------------------
  // Template initialization for forms and data
  // ------------------------------------------
  $themeconf=$template->get_template_vars('themeconf');
  $PP_theme=$themeconf['id'];

  $template->assign(
    array(
            'PP_VERSION'                       => $version,
            'PP_PATH'                          => PP_PATH,
						'PP_PASSWORDENF_TRUE'              => $conf_PP['PASSWORDENF']=='true' ? 'checked="checked"' : '' ,
						'PP_PASSWORDENF_FALSE'             => $conf_PP['PASSWORDENF']=='false' ? 'checked="checked"' : '' ,
						'PP_PASSWORD_SCORE'                => $conf_PP['PASSWORD_SCORE'],
            'PP_ADMINPASSWENF_TRUE'            => $conf_PP['ADMINPASSWENF']=='true' ? 'checked="checked"' : '' ,
						'PP_ADMINPASSWENF_FALSE'           => $conf_PP['ADMINPASSWENF']=='false' ? 'checked="checked"' : '' ,
            'PP_PWDRESET_TRUE'                 => $conf_PP['PWDRESET']=='true' ? 'checked="checked"' : '' ,
            'PP_PWDRESET_FALSE'                => $conf_PP['PWDRESET']=='false' ? 'checked="checked"' : '' ,
						'PP_PASSWORD_TEST_SCORE'           => $PP_Password_Test_Score,
            'PP_LOGFAILEDPASSW_TRUE'           => $conf_PP['LOGFAILBLOCK']=='true' ? 'checked="checked"' : '' ,
            'PP_LOGFAILEDPASSW_FALSE'          => $conf_PP['LOGFAILBLOCK']=='false' ? 'checked="checked"' : '' ,
            'PP_NBLOGFAIL'                     => $conf_PP['NBLOGFAIL'],
            'PP_USRLOCKEDTXT'                  => $conf_PP['USRLOCKEDTXT']
    )
  );


// +-----------------------------------------------------------------------+
// |                             errors display                            |
// +-----------------------------------------------------------------------+
  if (isset ($errors) and count($errors) != 0)
  {
    $template->assign('errors',array());
    foreach ($errors as $error)
    {
      array_push($page['errors'], $error);
    }
  }  

// +-----------------------------------------------------------------------+
// |                           templates display                           |
// +-----------------------------------------------------------------------+
  $template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/PP_admin.tpl');
  $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>