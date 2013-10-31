<?php
$lang['PP_Title'] = 'Password Policy - Version : ';
$lang['PP_SubTitle'] = 'Plugin-Konfiguration';
$lang['PP_submit'] = 'Einstellungen speichern';
$lang['PP_save_config'] ='Konfiguration gespeichert.';
$lang['PP_Disable'] = ' Deaktivieren (Standard)';
$lang['PP_Enable'] = 'Aktivieren ';
$lang['PP_Support_txt'] = 'Die offizielle Unterstützung für dieses Plugin ist nur auf diesem Diskussionsforum von Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=" onclick="window.open(this.href);return false;">Englisch-Forum - http://piwigo.org/forum/viewtopic.php?id=</a>';
$lang['PP_PasswordTest'] = 'Passwort testen : ';
$lang['PP_ScoreTest'] = 'Ergebnis : ';
$lang['PP_Error_Password_Mandatory'] = 'Sicherheit: Das Passwort ist obligatorisch !';
$lang['PP_Error_Password_Need_Enforcement_%s'] = 'Sicherheit: Ein Steuer-System berechnet eine Partitur von der gewählten Passwörter Komplexität. Die Komplexität des Passworts zu niedrig ist (score = %s). Bitte wählen Sie ein neues Passwort zu mehr Sicherheit, indem Sie folgende Regeln:<br>
- Verwenden Sie Buchstaben und Zahlen<br>
- Verwenden Sie Groß-und Kleinschreibung<br>
- Erhöhung ihrer Länge (Anzahl Zeichen)<br>
Die minimale Passwörter der Gäste ist: ';
$lang['PP_Password_Enforced'] = 'Stärkung des Sicherheitsniveaus von Passwortern';
$lang['PP_Password_Enforced_true'] = 'Aktivieren. Mindestpunktzahl:';
$lang['PP_AdminPassword_Enforced'] = 'Trifft auch für Administratoren zu.';
$lang['PP_Password_Reset_Msg'] = 'Bitte, ändern Sie Ihr Passwort!';
$lang['PP_PwdReset'] = 'Passwort erneuern';
$lang['PP_Password reset selected users'] = 'Passwort anfordern Erneuerung für ausgewählte Benutzer';
$lang['PP_Guest cannot be pwdreset'] = 'Passwort erneuern kann nicht für die Gäste gestellt werden!';
$lang['PP_Default user cannot be pwdreset'] = 'Passwort-Änderung kann nicht für den Standard-Benutzer eingestellt werden!';
$lang['PP_Webmaster cannot be pwdreset'] = 'Passwort erneuern können nicht für den Webmaster eingestellt werden!';
$lang['PP_Generic cannot be pwdreset'] = 'Passwort erneuern kann nicht für die generische Konto gestellt werden!';
$lang['PP_Admins cannot be pwdreset'] = 'Passwortänderung kann nicht für Administratorenkonten gesetzt werden.';
$lang['PP_You cannot pwdreset your account'] = 'Passwort erneuern können nicht auf eigene Rechnung eingestellt werden!';
$lang['PP_You need to confirm pwdreset'] = 'Sie müssen bestätigen, Passwort erneuern (check box)!';
$lang['PP_PwdReset_Todo'] = 'Passwort erneuert werden';
$lang['PP_PwdReset_Done'] = 'Passwort erneuert';
$lang['PP_PwdReset_NA'] = 'Original-Passwort';
$lang['PP %d user pwdreseted'] = 'Passwortänderung für %d Benutzer erforderlich.';
$lang['PP %d users pwdreseted'] = 'Passwortänderungen für %d Benutzer erforderlich.';
$lang['PP_passwtestTitle'] = 'Prüfung der Passworts Komplexität';
$lang['PP_passwtestTitle_d'] = 'Geben Sie das Passwort zu testen, und klicken Sie auf &quot;Ergebnis Berechnung&quot;, um das Ergebnis zu sehen.';
$lang['PP_passwTitle_d'] = 'Durch die Aktivierung dieser Option ist zwingend die Beschlagnahme eines Passwortes bei der Anmeldung und das Passwort erfordert vom Besucher ausgewählt, um ein Mindestmaß an Komplexität gerecht zu werden. Wird der Schwellenwert nicht erreicht wird, die Gäste erzielt, und die Mindestpunktzahl erreicht werden soll angezeigt werden, zusammen mit Empfehlungen an den Wert dieser Gäste zu steigern.<br><br>
Es gibt Feldtest der Komplexität eines Passworts zu messen und sich leisten können, eine Vorstellung von der Partitur zu erhalten, um komplexe, kundenspezifische definieren.<br><br>
Hinweis: Die Gäste eines Passwortes ist auf der Grundlage mehrerer Parameter: Länge berechnet, die Art der verwendeten Zeichen (Buchstaben, Ziffern, Großbuchstaben, Kleinbuchstaben, Sonderzeichen). Ein Wert unter 100 wird als gering, zwischen 100 und 500, die Komplexität ist durchschnittlich, mehr als 500, die Sicherheit ist sehr gut.';
$lang['PP_passwadmTitle_d'] = 'Ein Administrator kann einen Benutzer-Account erstellen, mit oder ohne Anwendung der Regel der Komplexit&auml;t des Computings.<br><br>
Hinweis: Wenn der Benutzer erstellte Konto will Passwort zu &auml;ndern und Passwörter f&uuml;r die Benutzer St&auml;rkung aktiv ist, wird es vorbehaltlich der Regel-Satz.';
$lang['PP_PwdResetTitle_d'] = 'Das Aktivieren dieser Option wird eine neue Funktion im Piwigo-Benutzerverwaltung Panel hinzufügen (Benutzer> Verwalten), das kann sich bewerben, um das Passwort für ausgewählte Benutzer zu erneuern. Darüber hinaus wird eine neue Spalte hinzugefügt, um den Status von Passwörtern für jeden von ihnen für die folgenden Werte:<br>
- Passwort erneuert werden: Ein Passwort Antrag auf Verlängerung ist geplant.<br>
- Passwort erneuert: Das Passwort hat nach einer Anfrage erneuert worden.<br>
- Original-Passwort: Das Original-Passwort an Account-Erstellung gewählt und hat noch nie für eine Erneuerung erforderlich gewesen.<br>
Webmaster, generischen und Gast-Accounts sind von dieser Funktion ausgeschlossen.<br>
Diese Benutzer werden automatisch auf ihre Anpassung an jeder Seite ihrer Verbindungen umgeleitet werden, bis sie ihr Passwort geändert und eine explizite Meldung auf dieser Seite angezeigt werden.';
$lang['PP_Admins is not unlockable'] = 'Admin Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_LoginAttempts'] = 'Verwaltung der fehlerhaften Login Versuche';
$lang['PP_LockedUsers'] = 'Lock Status';
$lang['PP_Generic is not unlockable'] = 'Generische Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_You need to confirm unlock'] = 'Das Entsperren muss bestätigt werden (Kontrollbox)!';
$lang['PP_You cannot unlock your account'] = 'Sie können sich nicht selber entsperren';
$lang['PP_Webmaster is not unlockable'] = 'Webmaster Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_UserLocked_Custom_Txt'] = 'Anpassen der Meldung für gesperrte Benutzer';
$lang['PP_Max number of failed attempts_d'] = '0 deaktiviert die Anzahl der Fehlversuche';
$lang['PP_Max number of failed attempts'] = 'Maximale Anzahl Fehlversuche';
$lang['PP_Guest is not unlockable'] = 'Gast Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_Default user is not unlockable'] = 'Satndard Benutzer können nicht gesperrt bzw. entsperrt werden';
$lang['PP_Unlock'] = 'Entsperren';
$lang['PP_Unlock selected users'] = 'Ausgewählte Benutzer entsperren';
$lang['PP_User Not Locked'] = 'Benutzer nicht gesperrt';
$lang['PP_User Locked'] = 'Benutzer gesperrt';
$lang['PP %d user unlocked'] = '%d Benutzer freigeschaltet';
$lang['PP %d users unlocked'] = '%d Benutzer freigeschaltet';
$lang['PP_User_Account_Locked_Txt'] = 'Entschuldigung, aus Sicherheitsgründen Ihren Zugang zur Galerie wurde gesperrt aufgrund zu vieler fehlgeschlagener Anmeldeversuche. Dies kann aufgrund auf eine Hacker versuchen auf Ihrem Konto. Bitte wenden Sie sich an den Administrator, um die Entriegelung zu beantragen.';
$lang['PP_LoginAttempts_d'] = 'Durch Aktivierung dieser Option starten Sie eine Protokollierung von Login-Fehlversuchen zu Ihrem Account und erhalten die Möglichkeit diesen zu blockieren, wenn z.B. versucht wird mit Hilfe von Passwort Bibliotheken diesen zu hacken..<br/><br/>
<b style=&quot;color: red;&quot;>Webmaster, generische und Gast-Accounts sind von dieser Funktion ausgeschlossen.</b><br/><br/>
Die maximale Anzahl von Fehlversuchen vor dem Blockieren kann festgelegt werden. Es ist auch möglich ein Meldung einzugeben, die nur angezeigt wird, wenn sich ein Benutzer an einem blockierten Account mit richtigem Passwort anmeldet.<br/><br/>
Das Freischalten eines Accounts erfolgt über das Management Interface der Gallerie. Sie sehen dort eine neue Spalte mit Lock-Informationen. Ein rotes Symbol zeigt einen blockierten Account, ein grünes Symbol einen freien. Die Accounts können ausgewählt und mit dem "Freischalten"-Button wieder freigeschaltet werden.
';
$lang['PP_UserLocked_Custom_Txt_d'] = 'Hier können Sie eine Meldung eingeben, die angezeigt wird, wenn ein Benutzer versucht, sich mit richtigem Passwort an einem blockierten Account anzumelden. Mehrsprachigkeit ist mit Extended description plugin tags möglich, wenn diese aktiviert sind.';
?>