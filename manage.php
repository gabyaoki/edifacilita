<?php 
include ("connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php"); 
$_GET["area"] = (isset($_GET["area"]))?$_GET["area"]:"";
?>
<section class="container">
	<div id="manage">
		<div id="users">
		<?php
		include ("views/states.php");

		if($_GET["area"] == "users")
		{
			$sql = "SELECT * FROM users";
			$arrUser = Connect::runSql("getData", $sql);
			?>
				<h1>Manage Users</h1>

				<div class="options addCont">
					<a href="add.php?area=users">
						<span class="fas fa-user-plus"></span>
						<span class="label">New User</span>
					</a>
					<div class="optBt">	
						<a class="add" href="add.php?area=users">Add</a>	
					</div><!-- //optBt -->
				</div><!-- //options -->

			<?php
			foreach($arrUser as $user)
			{
			?>
				<div class="options">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$user['id']?>&amp;area=users">
							<span class="fas fa-user"></span>
							<p class="label">Edit <?=$user["strUsername"]?></p>
						</a>
					</div>
					
					<div class="optBt">	
						<a class="delete" href="models/delete.php?id=<?=$user['id']?>&amp;area=users">Delete</a>	
					</div><!-- //optBt -->
				</div><!-- //options -->
		<?php
			}
		}

		if($_GET["area"] == "info")
		{
		?>
			<h1>Manage Informations</h1>
			<form id="infos" method="post" action="models/save.php?area=infos" onsubmit="return validateForm();"  autocomplete="off">

				<div class="blockfield contact">
					<label>Phone:</label>
					<input type="text" class="required" name="phone" placeholder="+1 (604) 555 2222" value="<?=Connect::getGlobals('phone')?>" />
				</div><!--//blockfield-->

				<div class="blockfield contact">
					<label>E-mail:</label>
					<input type="text" class="required" name="email" placeholder="email@email.com" value="<?=Connect::getGlobals('email')?>" />
				</div><!--//blockfield-->

				<div class="blockfield contact">
					<label>Instagram:</label>
					<input type="text" class="required" name="instagram" placeholder="Instagram Link" value="<?=Connect::getGlobals('instagram')?>" />
				</div><!--//blockfield-->

				<input class="btn main" type="submit" value="Save" />
			</form>
		<?php
		}

		if($_GET["area"] == "pages")
		{
			$sql = "SELECT * FROM pages WHERE bMainPage = 1";
			$arrCats = Connect::runSql("getData", $sql);
			?>
				<h1>Manage Pages</h1>
			<?php
			foreach($arrCats as $cat)
			{
				$categoryCaption[$cat['id']] = $cat['strNav'];
			?>
				<div class="options">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$cat['id']?>&amp;area=pages">
							<span class="fas fa-file"></span>
							<p class="label">Edit <?=$cat["strNav"]?></p>
						</a>
					</div>
				</div><!-- //options -->
		<?php
			}
			$sql = "SELECT * FROM pages WHERE bMainPage = 0";
			$arrSubCats = Connect::runSql("getData", $sql);
			?>
			<div id="subPages">
				<h1>Manage SubPages</h1>
			<?php
			foreach($arrSubCats as $subcat)
			{
				if($subcat['id'])
			?>
				<div class="options">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$subcat['id']?>&amp;area=pages">
							<span class="fas fa-file"></span>
							<p class="cat">#<?=$categoryCaption[$subcat["nCategoryID"]]?></p>
							<p class="label">Edit <?=$subcat["strNav"]?></p>
						</a>
					</div>
				</div><!-- //options -->
		<?php
			}
			echo "</div>";
		}

		if($_GET["area"] == "videos")
		{
		?>
		<h1>Manage Videos</h1>
		<?php
		$sql = "SELECT * FROM videos";
		$arrVids = Connect::runSql("getData", $sql);
		?>
			<div class="addVid">
				<a class="edit" href="add.php?area=videos">
					<span class="fab fa-youtube"></span><p>Add Video</p>
				</a>
			</div>
		<?php
			foreach($arrVids as $vid) {
		?>
				<div class="options vids">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$vid['id']?>&amp;area=videos">
							<div class="video">
								<iframe src="<?=$vid['strURL']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<p class="label">Edit <?=$vid["strName"]?></p>
						</a>
					</div>

					<div class="optBt">	
						<a class="delete" href="models/delete.php?id=<?=$vid['id']?>&amp;area=videos">Delete</a>	
					</div><!-- //optBt -->
				</div><!-- //options -->
		<?php
			}
		}

		if($_GET["area"] == "blog")
		{
		?>
		<h1>Manage Blog Posts</h1>
		<?php
		$sql = "SELECT * FROM blogs";
		$arrPosts = Connect::runSql("getData", $sql);

		$sql = "SELECT * FROM pages WHERE bMainPage = 0";
		$arrCats = Connect::runSql("getData", $sql);

		foreach($arrCats as $cat)
		{
			$categoryCaption[$cat['id']] = $cat['strNav'];
		}
		?>
			<div class="addVid">
				<a class="edit" href="add.php?area=blog">
					<span class="fas fa-file-alt"></span><p>Add Blog Post</p>
				</a>
			</div>
		<?php
			foreach($arrPosts as $post)
			{
			?>
				<div class="longCard options">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$post['id']?>&amp;area=blog">
							<span class="fas fa-file"></span>
							<p class="cat">#<?=$categoryCaption[$post["nPageID"]]?></p>
							<p class="label">Edit <?=$post["strTitle"]?></p>
						</a>
					</div>

					<div class="optBt">	
						<a class="delete" href="models/delete.php?id=<?=$post['id']?>&amp;area=blog">Delete</a>	
					</div><!-- //optBt -->
				</div><!-- //options -->
		<?php
			}
		}

		if($_GET["area"] == "musics")
		{
		?>
		<h1>Manage Musics</h1>
		<?php
		$sql = "SELECT * FROM pages WHERE nCategoryID = 3";
		$arrSubCats = Connect::runSql("getData", $sql);

			foreach($arrSubCats as $subcat)
			{
			?>
				<div class="options">
					<div class="nUser">
						<a class="edit" href="manage.php?area=<?=$subcat['strLink']?>">
							<span class="fas fa-file"></span>
							<p class="label">Edit <?=$subcat["strNav"]?></p>
						</a>
					</div>
				</div><!-- //options -->
		<?php
			}
		}

		if($_GET["area"] == "lyrics")
		{
		?>
		<h1>Manage Lyrics</h1>
		<?php
		$sql = "SELECT * FROM lyrics";
		$arrPosts = Connect::runSql("getData", $sql);

		$sql = "SELECT id, strName FROM medias";
		$arrMedias = Connect::runSql("getData", $sql);

		foreach($arrMedias as $media)
		{
			$categoryCaption[$media['id']] = $media['strName'];
		}
		?>
			<div class="addVid">
				<a class="edit" href="add.php?area=lyrics">
					<span class="fas fa-file-alt"></span><p>Add Lyric</p>
				</a>
			</div>
		<?php
			foreach($arrPosts as $post)
			{
			?>
				<div class="options">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$post['id']?>&amp;area=lyrics">
							<span class="fas fa-file"></span>
							<p class="label">Edit <?=$categoryCaption[$post["nMediaID"]]?></p>
						</a>
					</div>

					<div class="optBt">	
						<a class="delete" href="models/delete.php?id=<?=$post['id']?>&amp;area=lyrics">Delete</a>	
					</div><!-- //optBt -->
				</div><!-- //options -->
		<?php
			}
		}

		if($_GET["area"] == "albums")
		{
		?>
		<h1>Manage Lyrics</h1>
		<?php
		$sql = "SELECT * FROM albums";
		$arrPosts = Connect::runSql("getData", $sql);
		?>
			<div class="addVid">
				<a class="edit" href="add.php?area=albums">
					<span class="fas fa-file-alt"></span><p>Add Lyric</p>
				</a>
			</div>
		<?php
			foreach($arrPosts as $post)
			{
			?>
				<div class="options">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$post['id']?>&amp;area=albums">
							<span class="fas fa-music"></span>
							<p class="label">Edit <?=$post['strName']?></p>
						</a>
					</div>

					<div class="optBt">	
						<a class="delete" href="models/delete.php?id=<?=$post['id']?>&amp;area=albums">Delete</a>	
					</div><!-- //optBt -->
				</div><!-- //options -->
		<?php
			}
		}

		if($_GET["area"] == "singles")
		{
		?>
		<h1>Manage Singles</h1>
		<?php
		$sql = "SELECT * FROM medias";
		$arrMedia = Connect::runSql("getData", $sql);
		?>
			<div class="addVid">
				<a class="edit" href="add.php?area=singles">
					<span class="fas fa-plus-circle"></span><p>Add Single</p>
				</a>
			</div>
		<?php
			foreach($arrMedia as $media)
			{
			?>
				<div class="options">
					<div class="nUser">
						<a class="edit" href="add.php?id=<?=$media['id']?>&amp;area=singles">
							<span class="fas fa-music"></span>
							<p class="label">Edit <?=$media['strName']?></p>
						</a>
					</div>

					<div class="optBt">	
						<a class="delete" href="models/delete.php?id=<?=$media['id']?>&amp;area=singles">Delete</a>	
					</div><!-- //optBt -->
				</div><!-- //options -->
		<?php
			}
		}
		?>
		</div>
	</div>
</section>

<?php 
include ("views/footer.php"); 
?>