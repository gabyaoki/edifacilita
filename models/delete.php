<?php
include ("../connect.php"); 

if($_GET["area"] == "users")
{
	$sql = "DELETE FROM users WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=users");
}

if($_GET["area"] == "videos")
{
	$sql = "DELETE FROM videos WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=videos");
}

if($_GET["area"] == "blog")
{
	$sql = "DELETE FROM blogs WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=blog");
}

if($_GET["area"] == "lyrics")
{
	$sql = "DELETE FROM lyrics WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=lyrics");
}

if($_GET["area"] == "albums")
{
	$sql = "DELETE FROM albums WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=albums");
}

if($_GET["area"] == "singles")
{
	$sql = "DELETE FROM medias WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=singles");
}

?>