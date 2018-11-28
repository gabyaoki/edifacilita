<?php
include("../connect.php");
session_start();

$_SESSION['sindico']['name'] = $_POST["name"];
$_SESSION['sindico']['email'] = $_POST["email"];
$_SESSION['sindico']['phone'] = $_POST["phone"];
$_SESSION['sindico']['phone2'] = $_POST["phone2"];
$_SESSION['sindico']['password'] = $_POST["password"];
$_SESSION['sindico']['dob'] = $_POST["dob"];

echo true;
?>