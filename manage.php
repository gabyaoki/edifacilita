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
                        <a class="btn sec" href="models/delete.php?id=<?=$user['userID']?>&amp;area=users">Delete</a>
						<a class="btn sec" href="add.php?id=<?=$user['userID']?>&amp;area=users">Edit</a>
					</div>
				</div><!-- //options -->
		<?php
			}
		}
		else if($_GET["area"] == "extrato")
		{
			?>
				<h1>Extrato do Condom&iacute;nio</h1>
				<div id="sindicoinfo-bio" class="extrato-table">
                    <div class="bio-row">
                        <div class="bio-cell">
                            <p>Data</p>
                        </div>
                        <div class="bio-cell">
                            <p>Lan&ccedil;amentos</p>
                        </div>
                        <div class="bio-cell">
                           <p>Valor</p>
                        </div><div class="bio-cell">
                           <p>Saldo</p>
                        </div>
                    </div>
                    <div class="bio-row">
                        <div class="bio-cell">
                            <p>01/01/2018</p>
                        </div>
                        <div class="bio-cell">
                            <p>Saldo Anterior</p>
                        </div>
                        <div class="bio-cell">
                           <p></p>
                        </div><div class="bio-cell">
                           <p>R$50.000,00</p>
                        </div>
                    </div>
                    <div class="bio-row">
                        <div class="bio-cell">
                            <p>10/01/2018</p>
                        </div>
                        <div class="bio-cell">
                            <p>Pagamanto de Fornecedores</p>
                        </div>
                        <div class="bio-cell">
                           <p>-R$1.000,00</p>
                        </div><div class="bio-cell">
                           <p>R$49.000,00</p>
                        </div>
                    </div>
                    <div class="bio-row">
                        <div class="bio-cell">
                            <p>15/01/2018</p>
                        </div>
                        <div class="bio-cell">
                            <p>Compra Bomba Piscina bbb</p>
                        </div>
                        <div class="bio-cell">
                           <p>-R$4.000,00</p>
                        </div><div class="bio-cell">
                           <p>R$45.000,00</p>
                        </div>
                    </div>
                </div>
		<?php
		}
        ?>
		</div>
	</div>
</section>

<?php 
include ("views/footer.php"); 
?>