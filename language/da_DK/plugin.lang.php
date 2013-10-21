<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['PP_Title'] = 'Password Policy - Version: ';
$lang['PP_SubTitle'] = 'Opsætning af plugin';
$lang['PP_submit'] = 'Gem indstillinger';
$lang['PP_save_config'] = 'Opsætning er gemt.';
$lang['PP_Disable'] = ' Deaktiver (standard)';
$lang['PP_Enable'] = 'Aktiver';
$lang['PP_Support_txt'] = 'Officiel support af denne plugin er kun tilgængelig i disse Piwigo-forumemner:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=" onclick="window.open(this.href);return false;">Engelsk forum - http://piwigo.org/forum/viewtopic.php?id=</a>';
$lang['PP_PasswordTest'] = 'Adgangskodetest:';
$lang['PP_ScoreTest'] = 'Resultat:';
$lang['PP_Error_Password_Mandatory'] = 'Sikkerhed: En adgangskode er påkrævet!';
$lang['PP_Error_Password_Need_Enforcement_%s'] = 'Sikkerhed: Et kontrolsystem beregner en værdi for den valgte adgangskodes kompleksitet. Din adgangskodes kompleksitet er for lav (værdi = %s). Vær venlig at vælge en ny og mere sikker adgangskode ved at følge disse regler:<br>
- Brug bogstaver og tal<br>
- Brug små og store bogstaver<br>
- Forøg længden (antal tegn)<br>
Administratoren kræver følgende minimale adgangskodeværdi:';
$lang['PP_Password_Enforced'] = 'Stærkere sikkerhedsniveau på adgangkoder';
$lang['PP_Password_Enforced_true'] = ' Aktiver. Minimal score:';
$lang['PP_AdminPassword_Enforced'] = 'Gældende administratorer';
$lang['PP_Password_Reset_Msg'] = 'Vær venlig at ændre din adgangskode!';
$lang['PP_PwdReset'] = 'Fornyelse af adgangskode';
$lang['PP_Password reset selected users'] = 'Bed om at udvalgte brugere fornyer deres adgangskode';
$lang['PP_Guest cannot be pwdreset'] = 'Fornyelse af adgangskode kan ikke opsættes for gæstekonto!';
$lang['PP_Default user cannot be pwdreset'] = 'Fornyelse af adgangskode kan ikke opsættes for standardbrugerkontoen!';
$lang['PP_Webmaster cannot be pwdreset'] = 'Fornyelse af adgangskode kan ikke opsættes på webmasterkontoen!';
$lang['PP_Generic cannot be pwdreset'] = 'Fornyelse af adgangskode kan ikke opsættes for generiske konti!';
$lang['PP_Admins cannot be pwdreset'] = 'Adgangskodefornyelse kan ikke opsættes på administatorkonto!';
$lang['PP_You cannot pwdreset your account'] = 'Fornyelse af adgangskode kan ikke opsættes på din egen konto!';
$lang['PP_You need to confirm pwdreset'] = 'Du skal bekræfte fornyelse af adgangskode (checkboks)!';
$lang['PP_PwdReset_Todo'] = 'Adgangskoden fornyes';
$lang['PP_PwdReset_Done'] = 'Adgangskoden er fornyet';
$lang['PP_PwdReset_NA'] = 'Oprindelig adgangskode';
$lang['PP %d user pwdreseted'] = 'Fornyelse af adgangskode krævet af brugerne %s';
$lang['PP %d users pwdreseted'] = 'Fornyelse af adgangskode krævet af brugerne %s';
$lang['PP_passwtestTitle'] = 'Tester adgangskodens kompleksitet';
$lang['PP_passwtestTitle_d'] = 'Skriv adgangskoden, der skal testes, og klik dernæst på &quot;Beregn score&quot; for at se resultatet.';
$lang['PP_passwTitle_d'] = 'Aktivering af denne valgmulighed gør det til at krav at have en adgangskode ved registreringen, og kræver at den valgte adgangskode opfylder et minimalt kompleksitetsniveau.  Hvis tærsklen ikke opfyldes, vil den opnåede score og den minimale score, der skal opfyldes, blive vist, sammen med anbefalinger til forbedring af scoren.<br><br>
Der er et testfelt til måling af adgangskodens kompleksitet, og som giver en idé om hvordan man definerer en sådan.<br><br>
Bemærk: Adgangskodens score beregnes ud fra flere parametre: længde, typen af benyttede tegn (bogstaver, tal, store bogstaver, små bogstaver, særlige tegn). En score på under 100 betragtes som lav, fra 100 til 500 er kompleksiteten gennemsnitlig og over 500 er sikkerheden fremragende.';
$lang['PP_passwadmTitle_d'] = 'En administrator kan oprette en brugerkonto med eller uden krav om kompleksitetsberegning.<br><br>
Bemærk: Hvis en brugeren senere ønsker at ændre adgangskode og der er krav om at brugerne har stærke adgangskoder, vil adgangskoden blive udsat for kravet.';
$lang['PP_PwdResetTitle_d'] = 'Aktivering af denne valgmulighed tilføjer en ny funktion til Piwigos brugerhåndteringspanel (Brugere > Håndter), vedrørende fornyelse af udvalgte brugeres adgangskoder. Desuden tilføjes en ny kolonne, som viser adgangskodestatus for hver af dem, med følgende værdier:<br>
- Adgangskode skal fornyes: Der er planlagt at bede om fornyelse af adgangskoden.<br>
- Adgangskode fornyet: Adgangskoden er blevet fornyet, efter der er bedt om det.<br>
- Oprindelig adgangskode: Den oprindelige adgangskode valgt ved kontooprettelsen, og som aldrig har været krævet fornyet.<br>
Funktionen gælder ikke webmaster, generiske og gæstekonti.<br>
Disse brugere vil automatisk blive omdirigeret til deres opsætningsside, hver gang de logger på, indtil adgangskoden er blevet ændret, og der vil eksplicit blive givet besked om det på den side.';
?>