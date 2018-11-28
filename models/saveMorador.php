<?php
include("../connect.php");
session_start();

$sql = "SELECT strCode FROM codes WHERE bInUse = 0";
$arrCode = Connect::runSql("getData", $sql);

$arrCodes = [];
foreach($arrCode as $code) {
    array_push($arrCodes, $code['strCode']);
}

$hashpass = password_hash($_POST['password'], PASSWORD_DEFAULT);

if(in_array($_POST['code'], $arrCodes)) {
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
				'".$_POST["phone"]."',
				'".$_POST["phone2"]."',
				'".$hashpass."',
				'".$_POST["dob"]."',
				'".$_POST["code"]."'
			)";
	Connect::runSql("saveData", $sql);
    
    $sql = "UPDATE codes SET bInUse = 1 WHERE codes.strCode = '".$_POST["code"]."'";
    Connect::runSql("saveData", $sql);

	$_SESSION['newEmail'] = $_POST["email"];
	echo true;
}
?>