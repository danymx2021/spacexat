<?php
include("../res/x5engine.php");
$nameList = array("3n8","tkl","djk","egc","tlr","tus","yyp","s8z","7eu","h5p");
$charList = array("Z","D","F","V","L","M","Y","S","3","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
