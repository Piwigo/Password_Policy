<?php
$lang['PP_Title'] = 'Password Policy - Versija : ';
$lang['PP_SubTitle'] = 'Spraudņa konfigurācija';
$lang['PP_submit'] = 'Saglabāt iestatījumus';
$lang['PP_save_config'] ='Konfigurācija saglabāta.';
$lang['PP_Disable'] = ' Atspējot (pēc noklusējuma)';
$lang['PP_Enable'] = ' Iespējot ';
$lang['PP_Support_txt'] = 'Oficiāls šī spraudņa atbalsts ir pieejams tikai Piwigo forumā:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=" onclick="window.open(this.href);return false;">Forums angļu valodā - http://piwigo.org/forum/viewtopic.php?id=</a>';
$lang['PP_PasswordTest'] = 'Rezultāta aprēķins';
$lang['PP_ScoreTest'] = 'Rezultāts: ';
$lang['PP_Error_Password_Mandatory'] = 'Drošība : Parole ir obligāta !';
$lang['PP_Error_Password_Need_Enforcement_%s'] = 'Drošība : Kontrolsistēma aprēķina izvēlētās paroles sarežģītības pakāpi. Jūsu paroles sarežģītība ir par zemu (rezultāts = %s). Lūdzu, izveidojiet jaunu, drošāku paroli, sekojot šiem nosacījumiem:<br>
- Lietojiet burtus un ciparus<br>
- Lietojiet apakšējo un augšējo reģistru<br>
- Palieliniet tās garumu (rakstzīmju skaits)<br>
Minimālais, administratora pieprasītais paroles sarežģītības līmenis ir: ';
$lang['PP_Password_Enforced'] = 'Paroļu drošības līmeņa stiprināšana';
$lang['PP_Password_Enforced_true'] = ' Iespējot. Minimālais līmenis: ';
$lang['PP_AdminPassword_Enforced'] = 'Attiecas uz administratoriem';
$lang['PP_Password_Reset_Msg'] = 'Lūdzu nomainiet savu paroli';
$lang['PP_PwdReset'] = 'Paroles atjaunošana';
$lang['PP_Password reset selected users'] = 'Pieprasīt paroles atjaunošanu atlasītajiem lietotājiem';
$lang['PP_Guest cannot be pwdreset'] = 'Paroles atjaunošanu nevar iestatīt viesu kontam!';
$lang['PP_Default user cannot be pwdreset'] = 'Paroles atjaunošanu nevar veikt lietotāja pēc noklusējuma kontam!';
$lang['PP_Webmaster cannot be pwdreset'] = 'Paroles atjaunošanu nevar iestatīt webmastera kontam!';
$lang['PP_Generic cannot be pwdreset'] = 'Vispārējiem kontiem nevar iestatīt paroles atjaunošanu!';
$lang['PP_Admins cannot be pwdreset'] = 'Paroles atjaunošanu nevar veikt admins kontam!';
$lang['PP_You cannot pwdreset your account'] = 'Paroles atjaunošanu nevar iestatīt jūsu paša(as) kontam!';
$lang['PP_You need to confirm pwdreset'] = 'Jums jāapstiprina paroles atjaunošana (atzīmēt rūtiņā)!';
$lang['PP_PwdReset_Todo'] = 'Parole jāatjauno';
$lang['PP_PwdReset_Done'] = 'Parole atjaunota';
$lang['PP_PwdReset_NA'] = 'Oriģinālā parole';
$lang['PP %d user pwdreseted'] = 'Lietotājam %d nepieciešams atjautot paroli';
$lang['PP %d users pwdreseted'] = 'Paroles atjaunošana nepieciešama %d lietotājiem';
$lang['PP_passwtestTitle'] = 'Paroles komplicētības testēšana';
$lang['PP_passwtestTitle_d'] = 'Ievadiet testēšanao paredzēto paroli un klikšķiniet uz&quot;Score calculation&quot; lai redzētu rezultātu.';
$lang['PP_passwTitle_d'] = 'Šīs opcijas iespējošana padara par obligātu paroles ietveršanu reģistrējoties, un pieprasa, lai apmeklētāju izvēlētā parole atbilstu minimālajam komplicētības prasībām. Ja šis līmenis nav sasniegts, tiem parādīts sasniegtais komplicētības rādītājs, minimāli pieļaujamais slieksnis, kā arī ieteikumi, kas jādara, lai sasniegtu labāku rezultātu.<br><br>
Pastāv paroles lauka tests, kas mēra paroles komplicētības pakāpi, un var sniegt padomu, kā uzlabot un padarīt šo rezultātu labāku.<br><br>
Note: Komplicētības rādītājs tiek aprēķināts izmantojot vairākus parametrus:
garumu, izmantoto rakstzīmju tipu (burti, cipari, lielie burti, mazie burti, speciālās rakstzīmes). Rezultāts zem100 tiek atzīts par nepietiekami zemu (low), no 100 līdz 500, kā vidēji sarežģīts; virs 500, drošības līmenis ir lielisks.';
$lang['PP_passwadmTitle_d'] = 'Administrators var izveidot lietotāja kontu ar vai bez paroles komplicētības pārbaudes aplikāciju.<br><br>
Note: Ja lietotājs, kura konts jau izveidots, grib nomainīt savu paroli un ir aktīva paroles stingrības uzlabišanas aplikācija, būs jāievēro visi stingrības uzlabošanas noteikumi.';
$lang['PP_PwdResetTitle_d'] = 'Iespējojot šo opciju Piwigo lietotāju pārvaldības panelim tiks pievienota jauna iezīme (Users> Manage), ko var izmantot, lai atlasītiem lietotājiem atjaunotu paroli. Turklāt ir pievienota jaunā kolonna, lai parādītu paroles statusu katram no viņiem ar šādām vērtībām:<br>
- Parole būtu jāatjauno: Plānots paroles atjaunošanas pieprasījums.<br>
- Parole atjaunota: Parole atjaunota pēc saņemtā pieprasījuma.<br>
- Sākotnējā parole: Sākotnējā parole izvēlēta pie konta izveidošanas un nav bijis pieprasījuma to atjaunot.<br>
Webmaster, vispārējie un viesu konti ir izslēgti no šīs funcijas.<br>
Šie lietotāji tiks automātiski novirzīti uz to pielāgošanas lapām katrā no to savienojumiem līdz tie nomainīs savu paroli un nepārprotama ziņa par to tiks parādīta šajā lapā.';
$lang['PP_You cannot unlock your account'] = 'Jūs nevarat atbloķēt pats savu kontu';
$lang['PP_LoginAttempts'] = 'Neizdevušos pieteikšanās mēģinājumu pārvaldība';
$lang['PP %d user unlocked'] = '%d lietotājs atbloķēts';
$lang['PP %d users unlocked'] = '%d lietotāji atbloķēti';
$lang['PP_LockedUsers'] = 'Bloķēšanas statuss';
$lang['PP_Max number of failed attempts'] = 'Maksimālais neveiksmīgo mēģinājumu skaits:';
$lang['PP_Unlock'] = 'Atbloķēšana';
$lang['PP_Unlock selected users'] = 'Atbloķējiet izvēlētos lietotājus';
$lang['PP_User Locked'] = 'Lietotājs ir bloķēts';
$lang['PP_User Not Locked'] = 'Lietotājs nav bloķēts';
$lang['PP_You need to confirm unlock'] = 'Jums ir jāapstiprina atbloķēšanu (atzīmējiet)!';
$lang['PP_Admins is not unlockable'] = 'Admin lietotājus nevar bloķēt un atbloķēt';
?>