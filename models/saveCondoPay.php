<?php
include_once("../connect.php");
include("codegenerator.php");
session_start();

$hashpass = password_hash($_SESSION['condo']['password'], PASSWORD_DEFAULT);
$hashpass2 = password_hash($_SESSION['sindico']['password'], PASSWORD_DEFAULT);

if($_POST["plan"]) {
    $plan = $_POST["plan"];
} else {
    $plan = $_POST["plan2"];
}

$sql = "INSERT INTO condo
			(strName,
			strEmail,
			strAddress,
            nPhone,
            nPhone2,
			nPlanID)
		VALUES
			('".$_SESSION['condo']['name']."',
			'".$_SESSION['condo']['email']."',
            '".$_SESSION['condo']['phone']."',
            '".$_SESSION['condo']['phone2']."',
			'".$_SESSION['condo']['endereco']."',
			'".$plan."'
		)";
$condoID = Connect::runSql("saveData", $sql);

$_SESSION['nCondoID'] = $condoID;
$code = Code::saveCode();

$sql = "INSERT INTO users
				(strName,
				strEmail,
				strPhone,
				strAltPhone,
				strPassword,
				dob,
				code)
			VALUES
				('".$_SESSION['sindico']['name']."',
				'".$_SESSION['sindico']['email']."',
				'".$_SESSION['sindico']['phone']."',
				'".$_SESSION['sindico']['phone2']."',
				'".$hashpass2."',
				'".$_SESSION['sindico']['dob']."',
				'".$code."'
			)";
$sindicoID = Connect::runSql("saveData", $sql);

$sql = "UPDATE condo SET nSindicoID = ".$sindicoID."WHERE id = ".$condoID;
Connect::runSql("saveData", $sql);

$sql = "UPDATE codes SET bInUse = 1 WHERE strCode = '".$code."'";
Connect::runSql("saveData", $sql);

$_SESSION['condoEmail'] = $_SESSION['condo']['email'];
$_SESSION['userEmail'] = $_SESSION['sindico']['email'];
echo true;
?>