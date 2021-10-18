<?php
include("../res/x5engine.php");
$nameList = array("8y7","w8s","5ad","t26","nej","gt6","g22","uth","fd2","rw5");
$charList = array("D","A","Z","3","2","U","H","2","8","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
