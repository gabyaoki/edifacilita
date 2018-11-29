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
			$sql = "SELECT
                        users.id AS userID,
                        users.strName AS userName,
                        codes.*
                    FROM
                        codes
                    LEFT JOIN users ON users.code = codes.strCode
                    WHERE EXISTS 
                        (SELECT condo.id FROM condo WHERE condo.id = codes.nCondoID AND condo.id = ".$_SESSION["condo"]["id"].")";
			$arrUser = Connect::runSql("getData", $sql);
			?>
				<h1>Manage Users</h1>

				<div class="options addCont">
					<a href="add.php?area=users" class="btn main">
						<span class="fas fa-user-plus"></span>
						<span class="label">Add New User</span>
					</a>
				</div><!-- //options -->

			<?php
			foreach($arrUser as $user)
			{
			?>
				<div class="options">
					<div class="nUser">
                        <span class="fas fa-user"></span>
                        <p class="label"><?=$user["userName"]?></p>
                        <a class="btn sec" href="models/delete.php?id=<?=$user['id']?>&amp;area=users">Delete</a>
						<a class="btn sec" href="add.php?id=<?=$user['userID']?>&amp;area=users">Edit</a>
					</div>
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