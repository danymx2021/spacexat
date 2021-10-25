<?php
include("../res/x5engine.php");
$nameList = array("m4t","53w","y7k","guj","ht6","mhu","yyc","zvc","5hr","s3x");
$charList = array("Y","U","A","R","G","P","U","G","F","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
