<?php
include("../connect.php");
session_start();

$_SESSION['condo']['name'] = $_POST["name"];
$_SESSION['condo']['endereco'] = $_POST["endereco"];
$_SESSION['condo']['email'] = $_POST["email"];
$_SESSION['condo']['phone'] = $_POST["phone"];
$_SESSION['condo']['phone2'] = $_POST["phone2"];

echo true;
?>