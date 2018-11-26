<?php
include("../connect.php");
session_start();

$hashpass = password_hash($_SESSION['condo']['password'], PASSWORD_DEFAULT);

if($_POST["plan"] == "free") {
	$plan = 1;
} else {
	$plan = 2;
}

$sql = "INSERT INTO users
			(strName,
			strEmail,
			strPhone,
			strAltPhone,
			strPassword,
			nUserType)
		VALUES
			('".$_SESSION['condo']['name']."',
			'".$_SESSION['condo']['email']."',
			'".$_SESSION['condo']['phone']."',
			'".$_SESSION['condo']['phone2']."',
			'".$hashpass."',
			'1'
		)";
Connect::runSql("saveData", $sql);

$sql = "INSERT INTO condo
			(strName,
			strEmail,
			strSindico,
			strAddress,
			nPlanID)
		VALUES
			('".$_SESSION['condo']['name']."',
			'".$_SESSION['condo']['email']."',
			'".$_SESSION['condo']['sindico']."',
			'".$_SESSION['condo']['endereco']."',
			'".$plan."'
		)";
Connect::runSql("saveData", $sql);

$_SESSION['newEmail'] = $_SESSION['condo']['email'];
echo true;
?>