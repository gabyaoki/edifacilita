<?php
include("../connect.php");
session_start();

$sql = "SELECT strCode FROM codes";
$code = Connect::runSql("singleData", $sql);

$hashpass = password_hash($_POST['password'], PASSWORD_DEFAULT);

if(in_array($_POST['code'], $code)) {
	$sql = "INSERT INTO users
				(strName,
				strEmail,
				strPhone,
				strAltPhone,
				strPassword,
				dob,
				code,
				nUserType)
			VALUES
				('".$_POST["name"]."',
				'".$_POST["email"]."',
				'".$_POST["phone"]."',
				'".$_POST["phone2"]."',
				'".$hashpass."',
				'".$_POST["dob"]."',
				'".$_POST["code"]."',
				'2'
			)";
	$code = Connect::runSql("saveData", $sql);

	$_SESSION['newEmail'] = $_POST["email"];
	echo true;
}
?>