<?php

$authorFname = 'Greg';
$authorLname = 'Sargent';
$siteTagline = 'Digital Product Designer, Dallas TX';
$siteDescription = "Digital Product Designer in Dallas, TX. iOS App Design, Android App Design & Development, Website Design & Development, Enterprise Software Design, User Research";
$today = date('l');
$currentYear = date("Y");
$myTimeZone = date_default_timezone_set('America/Chicago');
$lastModified = "Last updated: " . date("j F, Y", getlastmod());

//Sets the locale to US for all currency display
setlocale(LC_MONETARY, 'en_US');
 ?>
