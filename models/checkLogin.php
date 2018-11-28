<?php 
include ("../connect.php"); 

$sql = "SELECT
            condo.strName AS condoName,
            condo.nSindicoID,
            condo.nPlanID,
            users.*,
            (SELECT users.strName FROM users WHERE users.id = condo.nSindicoID) AS sindicoName
        FROM
            users
        LEFT JOIN codes ON users.code = codes.strCode
        LEFT JOIN condo ON codes.nCondoID = condo.id
        WHERE users.strEmail ='".$_POST["email"]."'";
$arrUsers = Connect::runSql("getData", $sql);

$passHash = $arrUsers[0]["strPassword"];

if(password_verify($_POST["senha"], $passHash))
{
	session_start();
	$_SESSION["currentUser"]["id"] = $arrUsers[0]["id"];
    $_SESSION["currentUser"]["name"] = $arrUsers[0]["strName"];
    $_SESSION["currentUser"]["email"] = $arrUsers[0]["strEmail"];
    $_SESSION["currentUser"]["phone"] = $arrUsers[0]["strPhone"];
    $_SESSION["currentUser"]["phone2"] = $arrUsers[0]["strAltPhone"];
    $_SESSION["currentUser"]["dob"] = $arrUsers[0]["dob"];
    $_SESSION["currentUser"]["code"] = $arrUsers[0]["code"];
    $_SESSION["condo"]["name"] = $arrUsers[0]["condoName"];
    $_SESSION["condo"]["plan"] = $arrUsers[0]["nPlanID"];
    $_SESSION["sindico"]["name"] = $arrUsers[0]["sindicoName"];
	header("location: ../dashboard.php");
} 
else {
	header("location: ../index.php?error=true");
	die;
}
	
?>