<?php
include_once("../connect.php");
include("codegenerator.php");
session_start();

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
			'2'
		)";
$condoID = Connect::runSql("saveData", $sql);

$_SESSION['nCondoID'] = $condoID;
$code = Code::saveCode();

$hashpass = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO users
				(strName,
				strEmail,
				strPhone,
				strAltPhone,
				strPassword,
				dob,
				code)
			VALUES
				('".$_POST["name"]."',
				'".$_POST["email"]."',
				'". $_POST["phone"]."',
				'".$_POST["phone2"]."',
				'".$hashpass."',
				'".$_POST["dob"]."',
				'".$code."'
			)";
$sindicoID = Connect::runSql("saveData", $sql);

$sql = "UPDATE condo SET nSindicoID = ".$sindicoID." WHERE id = ".$condoID;
Connect::runSql("saveData", $sql);

$sql = "UPDATE codes SET bInUse = 1 WHERE strCode = '".$code."'";
Connect::runSql("saveData", $sql);

$_SESSION['condoEmail'] = $_SESSION['condo']['email'];
$_SESSION['userEmail'] = $_POST["email"];
echo true;
?>