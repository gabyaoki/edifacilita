<?php
include ("../connect.php"); 

if($_GET["area"] == "users")
{
	$sql = "DELETE FROM users WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=users");
}

?>