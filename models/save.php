<?php 
include ("../connect.php"); 

if(($_GET["area"] == "users"))
{
	$hashpass = password_hash($_POST['password'], PASSWORD_DEFAULT);

	if($_POST["id"])
	{
		$sql = "UPDATE
					users
				SET
					strUsername = '".$_POST["username"]."',
					strPassword = '".$hashpass."'
				WHERE id=".$_POST["id"];

		Connect::runSql("saveData", $sql);
		header("location: ../manage.php?edit=true&area=users");
	} else
	{
		$sql = "INSERT INTO users 
			(strUsername, 
			strPassword) 
		VALUES (
			'".$_POST["username"]."',
			'".$hashpass."')";
		Connect::runSql("saveData", $sql);
		header("location: ../manage.php?add=true&area=users");
	}
}

if(($_GET["area"] == "infos"))
{
	$sql = "UPDATE
				globals
			SET
				strValue = '".$_POST["phone"]."'
			WHERE id=3";
	Connect::runSql("saveData", $sql);

	$sql = "UPDATE
				globals
			SET
				strValue = '".$_POST["email"]."'
			WHERE id=4";
	Connect::runSql("saveData", $sql);

	$sql = "UPDATE
				globals
			SET
				strValue = '".$_POST["instagram"]."'
			WHERE id=2";
	Connect::runSql("saveData", $sql);
	
	header("location: ../manage.php?edit=true&area=info");
}

if(($_GET["area"] == "pages"))
{
	$strHeroImg = Connect::uploadImg("heroImg");
	$strFeatImg = Connect::uploadImg("featImg");

	if($strHeroImg) {
		$sql = "UPDATE
					pages
				SET
					strHeroImg = '".$strHeroImg."'
				WHERE id=".$_POST["id"];

		Connect::runSql("saveData", $sql);
	} else {
		$sql = "UPDATE
					pages
				SET
					strHeroImg = '".$_POST["hero"]."'
				WHERE id=".$_POST["id"];

		Connect::runSql("saveData", $sql);
	}

	if($strFeatImg) {
		$sql = "UPDATE
					pages
				SET
					strFeatImg = '".$strFeatImg."'
				WHERE id=".$_POST["id"];

		Connect::runSql("saveData", $sql);
	} else {
		$sql = "UPDATE
					pages
				SET
					strFeatImg = '".$_POST["feat"]."'
				WHERE id=".$_POST["id"];

		Connect::runSql("saveData", $sql);
	}

	$sql = 'UPDATE
				pages
			SET
				strMainHeading = "'.$_POST["heading"].'",
				strMainContent = "'.addslashes($_POST["content"]).'",
				strQuote = "'.addslashes($_POST["quote"]).'"
			WHERE id='.$_POST["id"];

	Connect::runSql("saveData", $sql);
	header("location: ../manage.php?edit=true&area=pages");
}

if(($_GET["area"] == "videos"))
{
	if($_POST["id"])
	{
		$sql = "UPDATE
					videos
				SET
					strURL = '".$_POST["url"]."',
					nPageID = '".$_POST["pageid"]."',
					strName = '".$_POST["name"]."',
					strShortDesc = '".addslashes($_POST["desc"])."'
				WHERE id=".$_POST["id"];

		Connect::runSql("saveData", $sql);
	} else
	{
		$sql = "INSERT INTO videos 
			(strURL, 
			nPageID,
			strName,
			strShortDesc) 
		VALUES (
			'".$_POST["url"]."',
			'".$_POST["pageid"]."',
			'".$_POST["name"]."',
			'".addslashes($_POST["desc"])."')";
		Connect::runSql("saveData", $sql);
	}
	header("location: ../manage.php?add=true&area=videos");
}

if(($_GET["area"] == "blog"))
{
	$strCover = Connect::uploadImg("heroImg");


	if($_POST["id"])
	{
		if($strCover) {
			$sql = "UPDATE
						blogs
					SET
						strCover = '".$strCover."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		} else {
			$sql = "UPDATE
						blogs
					SET
						strCover = '".$_POST["hero"]."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		}

		$sql = 'UPDATE
					blogs
				SET
					strTitle = "'.$_POST["heading"].'",
					strShortDesc = "'.addslashes($_POST["shortDesc"]).'",
					strText = "'.addslashes($_POST["content"]).'",
					nPageID = "'.$_POST["pageid"].'"
				WHERE id='.$_POST["id"];
		Connect::runSql("saveData", $sql);
	} else
	{
		$sql = 'INSERT INTO blogs 
			(strTitle,
			strShortDesc,
			strText,
			strCover,
			nPageID) 
		VALUES (
			"'.$_POST["heading"].'",
			"'.addslashes($_POST["shortDesc"]).'",
			"'.addslashes($_POST["content"]).'",
			"'.$strCover.'",
			"'.$_POST["pageid"].'")';
		Connect::runSql("saveData", $sql);
	}
	header("location: ../manage.php?add=true&area=blog");
}

if(($_GET["area"] == "lyrics"))
{
	if($_POST["id"])
	{
		$sql = 'UPDATE
					lyrics
				SET
					nMediaID = "'.$_POST["nMediaID"].'",
					strText = "'.addslashes($_POST["text"]).'"
				WHERE lyrics.id='.$_POST["id"];
		Connect::runSql("saveData", $sql);
	} else
	{
		$sql = 'INSERT INTO lyrics 
			(strText,
			nMediaID) 
		VALUES (
			"'.addslashes($_POST["text"]).'",
			"'.$_POST["nMediaID"].'")';
		Connect::runSql("saveData", $sql);
	}

	header("location: ../manage.php?add=true&area=lyrics");
}

if(($_GET["area"] == "albums"))
{
	$strCover = Connect::uploadImg("heroImg");


	if($_POST["id"])
	{
		if($strCover) {
			$sql = "UPDATE
						albums
					SET
						strCover = '".$strCover."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		} else {
			$sql = "UPDATE
						albums
					SET
						strCover = '".$_POST["hero"]."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		}

		$sql = 'UPDATE
					albums
				SET
					strName = "'.$_POST["title"].'",
					nReleaseYear = "'.$_POST["nYear"].'"
				WHERE id='.$_POST["id"];
		Connect::runSql("saveData", $sql);
	} else
	{
		$sql = 'INSERT INTO albums 
			(strName,
			nReleaseYear,
			strCover) 
		VALUES (
			"'.$_POST["title"].'",
			"'.$_POST["nYear"].'",
			"'.$strCover.'")';
		Connect::runSql("saveData", $sql);
	}
	header("location: ../manage.php?add=true&area=albums");
}

if(($_GET["area"] == "singles"))
{
	$strCover = Connect::uploadImg("heroImg");
	$strFile = Connect::uploadFile("audioFile");


	if($_POST["id"])
	{
		if($strCover) {
			$sql = "UPDATE
						medias
					SET
						strCover = '".$strCover."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		} else {
			$sql = "UPDATE
						medias
					SET
						strCover = '".$_POST["hero"]."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		}

		if($strFile) {
			$sql = "UPDATE
						medias
					SET
						strFile = '".$strFile."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		} else {
			$sql = "UPDATE
						medias
					SET
						strFile = '".$_POST["audio"]."'
					WHERE id=".$_POST["id"];

			Connect::runSql("saveData", $sql);
		}

		$sql = 'UPDATE
					medias
				SET
					strName = "'.$_POST["title"].'",
					strShortDesc = "'.$_POST["text"].'",
					nAlbumID = "'.$_POST["nAlbum"].'"
				WHERE id='.$_POST["id"];
		Connect::runSql("saveData", $sql);
	} else
	{
		$sql = 'INSERT INTO medias 
			(strName,
			strShortDesc,
			nAlbumID,
			strFile,
			strCover) 
		VALUES (
			"'.$_POST["title"].'",
			"'.$_POST["text"].'",
			"'.$_POST["nAlbum"].'",
			"'.$strFile.'",
			"'.$strCover.'")';
		Connect::runSql("saveData", $sql);
	}
	header("location: ../manage.php?add=true&area=singles");
}

?>