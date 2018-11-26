<?php 
include ("../connect.php"); 

$sql = "SELECT * FROM users WHERE strUsername='".$_POST["username"]."'";
$arrUsers = Connect::runSql("getData", $sql);

$passHash = $arrUsers[0]["strPassword"];

if(password_verify($_POST["password"], $passHash))
{
	session_start();
	$_SESSION["userID"] = $arrUsers[0]["id"];
	header("location: ../dashboard.php");
} 
else {
	header("location: ../index.php?error=true");
	die;
}
	
?>