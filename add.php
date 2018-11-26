<?php 
include ("connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php"); 
?>
<div class="container">
	<div id="add">
	<!-- start of add Users -->
	<?php
	if(($_GET["area"] == "users"))
	{
		if(!isset($_GET["id"]))
		{
			$title = "Add New User";
			$username = "";
			$password = "";
			$id = "";
		}

		if(isset($_GET["id"]))
		{
			$userEdit = Connect::runSql("singleData", "SELECT * FROM users WHERE id=".$_GET["id"]);
			$username = $userEdit["strUsername"];
			$password = $userEdit["strPassword"];
			$title = "Edit User";
			$id = $userEdit["id"];
		}
	?>
		<h1><?=$title?></h1>
		<form id="addUser" method="post" action="models/save.php?area=users" onsubmit="return validateForm();"  autocomplete="off">
			<input type="hidden" name="id" value="<?=$id?>" />
			<div class="blockfield">
				<label>Username</label>
				<input type="text" class="required" name="username" placeholder="i.e. johndoe" value="<?=$username?>" />
			</div><!--//blockfield-->
			
			<div class="blockfield">
				<label>Password</label>
				<input type="password" class="required" name="password" placeholder="password" value="<?=$password?>" />
			</div><!--//blockfield-->

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add Users

	if(($_GET["area"] == "pages"))
	{
		$pageEdit = Connect::runSql("singleData", "SELECT * FROM pages WHERE id=".$_GET["id"]);
		$heading = $pageEdit["strMainHeading"];
		$content = $pageEdit["strMainContent"];
		$quote = $pageEdit["strQuote"];
		$strHeroImg = $pageEdit["strHeroImg"];
		$strFeatImg = $pageEdit["strFeatImg"];
		$title = "Edit Page";
		$id = $pageEdit["id"];
	?>
		<h1><?=$title?></h1>
		<form id="addPage" method="post" action="models/save.php?area=pages" onsubmit="return validateForm();"  autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?=$id?>" />
			<div class="blockfield">
				<label>Hero Image:</label>
				<?php
				if($strHeroImg) {
				?>
					<div class="editImg bgCont">
						<img class="bgImg" src="../assets/<?=$strHeroImg?>" alt="<?=$heading?>" />
					</div>
				<?php
				}
				?>
				<input type="file" value="<?=$strHeroImg?>" name="heroImg" />
				<input type="hidden" name="hero" value="<?=$strHeroImg?>" />
			</div><!--//blockfield-->

			<?php
			if($strFeatImg) {
			?>
			<div class="blockfield">
				<label>Feature Image:</label>

				<div class="editImg bgCont">
					<img class="bgImg" src="../assets/<?=$strFeatImg?>" alt="<?=$heading?>" />
				</div>
				<input type="file" value="<?=$strFeatImg?>" name="featImg" />
				<input type="hidden" name="feat" value="<?=$strFeatImg?>" />
			</div><!--//blockfield-->
			<?php
			}
			?>
			
			<div class="blockfield single">
				<label>Heading:</label>
				<input type="text" class="required" name="heading" placeholder="i.e. About Me" value="<?=$heading?>" />
			</div><!--//blockfield-->
			
			<?php
			if($content) {
			?>
			<div class="blockfield single">
				<label>Content:</label>
				<textarea name="content"><?=$content?></textarea>
			</div><!--//blockfield-->
			<?php
			}

			if($quote) {
			?>
			<div class="blockfield single">
				<label>Quote:</label>
				<textarea name="quote"><?=$quote?></textarea>
			</div><!--//blockfield-->
			<?php
			}
			?>

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add Pages

	if(($_GET["area"] == "videos"))
	{
		if(!isset($_GET["id"]))
		{
			$title = "Add New Video";
			$url = "";
			$pageid = "";
			$name = "";
			$desc = "";
			$id = "";
		}

		if(isset($_GET["id"]))
		{
			$videoEdit = Connect::runSql("singleData", "SELECT * FROM videos WHERE id=".$_GET["id"]);
			$url = $videoEdit["strURL"];
			$pageid = $videoEdit["nPageID"];
			$name = $videoEdit["strName"];
			$desc = $videoEdit["strShortDesc"];
			$title = "Edit Video";
			$id = $videoEdit["id"];
		}
	?>
		<h1><?=$title?></h1>
		<form id="addUser" method="post" action="models/save.php?area=videos" onsubmit="return validateForm();"  autocomplete="off">
			<input type="hidden" name="id" value="<?=$id?>" />
			<div class="blockfield">
				<label>Video Title:</label>
				<input type="text" class="required" name="name" placeholder="i.e. Today" value="<?=$name?>" />
			</div><!--//blockfield-->

			<div class="blockfield">
				<label>Embed Link:</label>
				<input type="text" class="required" name="url" placeholder="https://www.youtube.com/embed/..." value="<?=$url?>" />
			</div><!--//blockfield-->

			<div class="blockfield">
				<label>Short Description:</label>
				<input type="text" class="required" name="desc" placeholder="About the video" value="<?=$desc?>" />
			</div><!--//blockfield-->

			<div class="blockfield">
				<label>Video Category:</label>
				<select class="required" name="pageid" value="<?=$pageid?>" />
				<?php
				$videoCats = Connect::runSql("getData", "SELECT * FROM pages WHERE nCategoryID = 5");
				foreach ($videoCats as $cat) {
					$selected = $pageid==$cat['id']?'selected':'';
				?>
					<option value="<?=$cat['id']?>" <?=$selected?>><?=$cat['strNav']?></option>
				<?php
				}
				?>
				</select>
			</div><!--//blockfield-->

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add videos

	if(($_GET["area"] == "blog"))
	{
		if(!isset($_GET["id"]))
		{
			$title = "Add New Blog Post";
			$bTitle = "";
			$shortDesc = "";
			$text = "";
			$coverImg = "";
			$cat = "";
			$id = "";
		}

		if(isset($_GET["id"]))
		{
			$blogEdit = Connect::runSql("singleData", "SELECT * FROM blogs WHERE id=".$_GET["id"]);
			$title = "Edit Blog Post";
			$bTitle = $blogEdit['strTitle'];
			$shortDesc = $blogEdit['strShortDesc'];
			$text = $blogEdit['strText'];
			$coverImg = $blogEdit['strCover'];
			$pageid = $blogEdit['nPageID'];
			$id = $blogEdit['id'];
		}
	?>
		<h1><?=$title?></h1>
		<form id="addPage" method="post" action="models/save.php?area=blog" onsubmit="return validateForm();"  autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?=$id?>" />
			<div class="blockfield">
				<label>Hero Image:</label>
				<?php
				if($coverImg) {
				?>
					<div class="editImg bgCont">
						<img class="bgImg" src="../assets/<?=$coverImg?>" alt="<?=$bTitle?>" />
					</div>
				<?php
				}
				?>
				<input type="file" value="<?=$coverImg?>" name="heroImg" />
				<input type="hidden" name="hero" value="<?=$coverImg?>" />
			</div><!--//blockfield-->
			
			<div class="blockfield">
				<label>Title:</label>
				<input type="text" class="required" name="heading" placeholder="i.e. About Me" value="<?=$bTitle?>" />
			</div><!--//blockfield-->

			<div class="blockfield">
				<label>Post Category:</label>
				<select class="required" name="pageid" value="<?=$pageid?>" />
				<?php
				$blogCats = Connect::runSql("getData", "SELECT * FROM pages WHERE nCategoryID = 4");
				foreach ($blogCats as $cat) {
					$selected = $pageid==$cat['id']?'selected':'';
				?>
					<option value="<?=$cat['id']?>" <?=$selected?>><?=$cat['strNav']?></option>
				<?php
				}
				?>
				</select>
			</div><!--//blockfield-->

			<div class="blockfield single">
				<label>Short Description:</label>
				<textarea name="shortDesc"><?=$shortDesc?></textarea>
			</div><!--//blockfield-->

			<div class="blockfield single">
				<label>Quote:</label>
				<textarea name="content"><?=$text?></textarea>
			</div><!--//blockfield-->

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add Blog


	if(($_GET["area"] == "lyrics"))
	{
		if(!isset($_GET["id"]))
		{
			$title = "Add Lyric";
			$nMediaID = "";
			$text = "";
			$id = "";
		}

		if(isset($_GET["id"]))
		{
			$blogEdit = Connect::runSql("singleData", "SELECT * FROM lyrics WHERE id=".$_GET["id"]);
			$title = "Edit Lyric";
			$nMediaID = $blogEdit['nMediaID'];
			$text = $blogEdit['strText'];
			$id = $blogEdit['id'];
		}
	?>
		<h1><?=$title?></h1>
		<form id="addPage" method="post" action="models/save.php?area=lyrics" onsubmit="return validateForm();"  autocomplete="off">
			<input type="hidden" name="id" value="<?=$id?>" />

			<div class="blockfield">
				<label>Music:</label>
				<select class="required" name="nMediaID" value="<?=$nMediaID?>" />
				<?php
				$mediasCats = Connect::runSql("getData", "SELECT id, strName FROM medias");
				foreach ($mediasCats as $cat) {
					$selected = $nMediaID==$cat['id']?'selected':'';
				?>
					<option value="<?=$cat['id']?>" <?=$selected?>><?=$cat['strName']?></option>
				<?php
				}
				?>
				</select>
			</div><!--//blockfield-->

			<div class="blockfield single">
				<label>Lyric:</label>
				<textarea name="text" placeholder="Type lyric here..."><?=$text?></textarea>
			</div><!--//blockfield-->

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add lyric

	if(($_GET["area"] == "albums"))
	{
		if(!isset($_GET["id"]))
		{
			$title = "Add Album";
			$strName = "";
			$strCover = "";
			$nYear = "";
			$id = "";
		}

		if(isset($_GET["id"]))
		{
			$albEdit = Connect::runSql("singleData", "SELECT * FROM albums WHERE id=".$_GET["id"]);
			$title = "Edit Album";
			$strName = $albEdit['strName'];
			$strCover = $albEdit['strCover'];
			$nYear = $albEdit['nReleaseYear'];
			$id = $albEdit['id'];
		}
	?>
		<h1><?=$title?></h1>
		<form id="addPage" method="post" action="models/save.php?area=albums" onsubmit="return validateForm();"  autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?=$id?>" />

			<div class="blockfield">
				<label>Cover Image:</label>
				<?php
				if($strCover) {
				?>
					<div class="editImg bgCont">
						<img class="bgImg" src="../assets/<?=$strCover?>" alt="<?=$strName?>" />
					</div>
				<?php
				}
				?>
				<input type="file" value="<?=$strCover?>" name="heroImg" />
				<input type="hidden" name="hero" value="<?=$strCover?>" />
			</div><!--//blockfield-->

			<div class="blockfield single">
				<label>Title:</label>
				<input type="text" class="required" name="title" placeholder="i.e. Name" value="<?=$strName?>" />
			</div><!--//blockfield-->

			<div class="blockfield single">
				<label>Release Year:</label>
				<input type="number" class="required" name="nYear" placeholder="i.e. 2018" value="<?=$nYear?>" />
			</div><!--//blockfield-->

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add albums

	if(($_GET["area"] == "singles"))
	{
		if(!isset($_GET["id"]))
		{
			$title = "Add Single";
			$strName = "";
			$strCover = "";
			$strFile = "";
			$text = "";
			$nAlbum = "";
			$id = "";
		}

		if(isset($_GET["id"]))
		{
			$mEdit = Connect::runSql("singleData", "SELECT * FROM medias WHERE id=".$_GET["id"]);
			$title = "Edit Single";
			$strName = $mEdit['strName'];
			$strCover = $mEdit['strCover'];
			$strFile = $mEdit['strFile'];
			$text = $mEdit['strShortDesc'];
			$nAlbum = $mEdit['nAlbumID'];
			$id = $mEdit['id'];
		}
	?>
		<h1><?=$title?></h1>
		<form id="addPage" method="post" action="models/save.php?area=singles" onsubmit="return validateForm();"  autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?=$id?>" />

			<div class="blockfield single">
				<label>Title:</label>
				<input type="text" class="required" name="title" placeholder="i.e. Name" value="<?=$strName?>" />
			</div><!--//blockfield-->

			<div class="blockfield">
				<label>Cover Image:</label>
				<?php
				if($strCover) {
				?>
					<div class="editImg bgCont">
						<img class="bgImg" src="../assets/<?=$strCover?>" alt="<?=$strName?>" />
					</div>
				<?php
				}
				?>
				<input type="file" value="<?=$strCover?>" name="heroImg" />
				<input type="hidden" name="hero" value="<?=$strCover?>" />
			</div><!--//blockfield-->

			<div class="blockfield">
				<label>Audio File:</label>
				<?php
				if($strFile) {
				?>
					<div class="editSong bgCont">
						<audio controls class="album-music">
							<source class="audio" src="../assets/<?=$strFile?>" type="audio/mp3">
						</audio>
					</div>
				<?php
				}
				?>
				<input class="songFile" type="file" value="<?=$strFile?>" name="audioFile" />
				<input type="hidden" name="audio" value="<?=$strFile?>" />
			</div><!--//blockfield-->

			<div class="blockfield single">
				<label>Short Description:</label>
				<textarea name="text" placeholder="Type description here..."><?=$text?></textarea>
			</div><!--//blockfield-->

			<div class="blockfield">
				<label>Album:</label>
				<select name="nAlbum" value="<?=$nAlbum?>" />
					<option value="">Select an album...</option>
				<?php
				$albumCats = Connect::runSql("getData", "SELECT id, strName FROM albums");
				foreach ($albumCats as $cat) {
					$selected = $nAlbum==$cat['id']?'selected':'';
				?>
					<option value="<?=$cat['id']?>" <?=$selected?>><?=$cat['strName']?></option>
				<?php
				}
				?>
				</select>
			</div><!--//blockfield-->

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add singles
	?>
	</div>
</div>
<?php
include ("views/footer.php"); 
?>