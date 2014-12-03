<?php
$lang['PP_Title'] = 'Password Policy - Version : ';
$lang['PP_SubTitle'] = 'Plugin-Konfiguration';
$lang['PP_submit'] = 'Einstellungen speichern';
$lang['PP_save_config'] = 'Einstellungen gespeichert.';
$lang['PP_Disable'] = 'Deaktivieren (Standard)';
$lang['PP_Enable'] = 'Aktivieren ';
$lang['PP_Support_txt'] = 'Die offizielle Unterstützung für dieses Plugin ist nur auf diesem Diskussionsforum von Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=" onclick="window.open(this.href);return false;">Englisch-Forum - http://piwigo.org/forum/viewtopic.php?id=</a>';
$lang['PP_PasswordTest'] = 'Passwort testen:';
$lang['PP_ScoreTest'] = 'Ergebnis: ';
$lang['PP_Error_Password_Mandatory'] = 'Sicherheit: Ein Passwort wird zwingend vorausgesetzt!';
$lang['PP_Error_Password_Need_Enforcement_%s'] = 'Sicherheit: Ein Kontroll-System berechnet einen Score der gewählten Passwort-Komplexität. Die Komplexität Ihres Passworts ist zu niedrig (Score = %s). Bitte wählen Sie ein sichereres Passwort, indem Sie folgende Hinweise berücksichtigen:<br>
- Buchstaben und Zahlen verwenden<br>
- Groß-und Kleinschreibung verwenden<br>
- Länge erhöhen (Anzahl Zeichen)<br>
Der minimale Passwort-Score für Administratoren ist: ';
$lang['PP_Password_Enforced'] = 'Erhöhen der Passwortsicherheit';
$lang['PP_Password_Enforced_true'] = 'Aktivieren. Mindestpunktzahl:';
$lang['PP_AdminPassword_Enforced'] = 'Auf Administratoren anwenden';
$lang['PP_Password_Reset_Msg'] = 'Bitte ändern Sie Ihr Passwort!';
$lang['PP_PwdReset'] = 'Passworterneuerung';
$lang['PP_Password reset selected users'] = 'Passwort-Erneuerung für ausgewählte Benutzer anfordern';
$lang['PP_Guest cannot be pwdreset'] = 'Passworterneuerung kann nicht für die Gäste gesetzt werden!';
$lang['PP_Default user cannot be pwdreset'] = 'Passwort-Erneuerung kann nicht für das Standard-Konto gesetzt werden!';
$lang['PP_Webmaster cannot be pwdreset'] = 'Passworterneuerung kann nicht für das Webmaster-Konto gesetzt werden!';
$lang['PP_Generic cannot be pwdreset'] = 'Passworterneuerung kann nicht für die generischen Konti erstellt werden!';
$lang['PP_Admins cannot be pwdreset'] = 'Passworterneuerung kann nicht für Administratoren gesetzt werden.';
$lang['PP_You cannot pwdreset your account'] = 'Passworterneuerung kann nicht auf dem eigenen Konto gesetzt werden!';
$lang['PP_You need to confirm pwdreset'] = 'Sie müssen die Passworterneuerung bestätigen (Kntrollbox)!';
$lang['PP_PwdReset_Todo'] = 'Passwort, das erneuert werden muss';
$lang['PP_PwdReset_Done'] = 'Passwort ersetzt';
$lang['PP_PwdReset_NA'] = 'Original-Passwort';
$lang['PP %d user pwdreseted'] = 'Passwortänderung für %d Benutzer erforderlich.';
$lang['PP %d users pwdreseted'] = 'Passwortänderungen für %d Benutzer erforderlich.';
$lang['PP_passwtestTitle'] = 'Prüfung der Passwort-Komplexität';
$lang['PP_passwtestTitle_d'] = 'Geben Sie das zu testende Passwort ein und klicken Sie auf &quot;Score-Berechnung&quot;, um das Ergebnis zu sehen.';
$lang['PP_passwTitle_d'] = 'Enabling this option makes mandatory the seizure of a password upon registration, and requires the password chosen by the visitor to meet a minimum level of complexity. If the threshold is not reached, the score achieved and the minimum score to be achieved are displayed, along with recommendations to increase the value of this score.<br/><br/>
There is field test to measure the complexity of a password, and can afford to get an idea of the score to define complex custom.<br/><br/>
Note: The score of a password is calculated based on several parameters: length, type of characters used (letters, digits, uppercase, lowercase, special characters). A score below 100 is considered low, from 100 to 500, the complexity is average; beyond 500, the security is excellent.';
$lang['PP_passwadmTitle_d'] = 'An administrator can create a user account with or without application of the rule of computing complexity.<br/><br/>
Note: If the user account created wants to change password and strengthening passwords for users is active, it will be subject to the rule set.';
Webmaster, generischen und Gast-Accounts sind von dieser Funktion ausgeschlossen.<br>
Diese Benutzer werden automatisch auf ihre Anpassung an jeder Seite ihrer Verbindungen umgeleitet werden, bis sie ihr Passwort geändert und eine explizite Meldung auf dieser Seite angezeigt werden.';
$lang['PP_Admins is not unlockable'] = 'Admin-Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_LoginAttempts'] = 'Verwaltung der fehlerhaften Loginversuche';
$lang['PP_LockedUsers'] = 'Sperrstatus';
$lang['PP_Generic is not unlockable'] = 'Generische Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_You need to confirm unlock'] = 'Das Entsperren muss bestätigt werden (Kontrollbox)!';
$lang['PP_You cannot unlock your account'] = 'Sie können sich nicht selber entsperren';
$lang['PP_Webmaster is not unlockable'] = 'Webmaster können nicht gesperrt bzw. entsperrt werden';
$lang['PP_UserLocked_Custom_Txt'] = 'Anpassen der Meldung für gesperrte Benutzer';
$lang['PP_Max number of failed attempts_d'] = '0 deaktiviert die Anzahl Fehlversuche';
$lang['PP_Max number of failed attempts'] = 'Maximale Anzahl Fehlversuche';
$lang['PP_Guest is not unlockable'] = 'Gast-Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_Default user is not unlockable'] = 'Standard-Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_Unlock'] = 'Entsperren';
$lang['PP_Unlock selected users'] = 'Ausgewählte Benutzer entsperren';
$lang['PP_User Not Locked'] = 'Benutzer nicht gesperrt';
$lang['PP_User Locked'] = 'Benutzer gesperrt';
$lang['PP %d user unlocked'] = '%d Benutzer freigeschaltet';
$lang['PP %d users unlocked'] = '%d Benutzer freigeschaltet';
$lang['PP_User_Account_Locked_Txt'] = 'Entschuldigung, aus Sicherheitsgründen wurde Ihr Zugang aufgrund zu vieler fehlgeschlagener Anmeldeversuche gesperrt. Dies könnte auf einen Hacker-Angriff hinweisen. Bitte wenden Sie sich an den Administrator, um die Entsperrung zu beantragen.';
$lang['PP_LoginAttempts_d'] = 'Durch Aktivierung dieser Option starten Sie eine Protokollierung von Login-Fehlversuchen zu Ihrem Account und erhalten die Möglichkeit diesen zu blockieren, wenn z.B. versucht wird mit Hilfe von Passwort Bibliotheken diesen zu hacken..<br/><br/>
<b style=&quot;color: red;&quot;>Webmaster, generische und Gast-Accounts sind von dieser Funktion ausgeschlossen.</b><br/><br/>
Die maximale Anzahl von Fehlversuchen vor dem Blockieren kann festgelegt werden. Es ist auch möglich ein Meldung einzugeben, die nur angezeigt wird, wenn sich ein Benutzer an einem blockierten Account mit richtigem Passwort anmeldet.<br/><br/>
Das Freischalten eines Accounts erfolgt über das Management Interface der Gallerie. Sie sehen dort eine neue Spalte mit Lock-Informationen. Ein rotes Symbol zeigt einen blockierten Account, ein grünes Symbol einen freien. Die Accounts können ausgewählt und mit dem "Freischalten"-Button wieder freigeschaltet werden.
';
$lang['PP_UserLocked_Custom_Txt_d'] = 'Hier können Sie eine Meldung eingeben, die angezeigt wird, wenn ein Benutzer versucht, sich mit richtigem Passwort an einem blockierten Account anzumelden. Mehrsprachigkeit ist mit Extended description plugin tags möglich, wenn diese aktiviert sind.';
$lang['PP_Err_Userlist_Settings'] = 'Dieser Reiter ist nur verfügbar, wenn Passworterneuerung oder Kontoentsperrung aktiviert sind.';
$lang['PP_No_Userlist'] = 'Es sind keine Benutzer verfügbar, die angezeigt werden könnten';
$lang['PP_Pwd_Actions'] = 'Benutzerverwaltung';
$lang['PP_Pwd_Actions_d'] = 'Kontoentsperrungs- und Passworterneuerungsanfragen werden hier gesetzt.<br/><br/>
Wähle Benutzer aus, bevor Du eine Aktion auswählst. Die Bestätigungscheckbox ist verpflichtend, bevor eine Aktion ausgeführt wird.<br/><br/>
<b style=&quot;color: red;&quot;>Wichtig :</b>Aktionen werden <u><b>NUR</b> auf Besucherkonten</u> und nicht auf Administrator-, Webmaster-, Standard- und Gastkonten angewendet.';
$lang['PP_Select page number'] = 'Die anzuzeigende Seitennummer wählen';
$lang['PP_Select page size'] = 'Seitengröße wählen';
$lang['PP_Users_List_Tab'] = 'Verwaltung';
$lang['PP_config_tab'] = 'Konfiguration';