<?php 
include ("connect.php"); 
include ("models/codegenerator.php"); 
include ("models/checkUser.php"); 
include ("views/header.php"); 
?>
<div class="container">
<div id="add">
    <div id="users">
	<!-- start of add Users -->
	<?php
	if(($_GET["area"] == "users"))
	{
		if(!isset($_GET["id"]))
		{
			$title = "Adicionar Usuário";
			$strName = "";
			$strEmail = "";
            $strPhone = "";
			$strAltPhone = "";
            $dob = "";
			$code = Code::generateCode();
			$id = "";
		}

		if(isset($_GET["id"]))
		{
			$userEdit = Connect::runSql("singleData", "SELECT * FROM users WHERE id=".$_GET["id"]);
			$strName = $userEdit["strName"];
            $strEmail = $userEdit["strEmail"];
            $strPhone = $userEdit["strPhone"];
            $strAltPhone = $userEdit["strAltPhone"];
            $dob = $userEdit["dob"];
            $code = $userEdit["code"];
			$title = "Editar Usuário";
			$id = $userEdit["id"];
		}
	?>
		<h1><?=$title?></h1>
		<form id="addUser" method="post" action="models/save.php?area=users" onsubmit="return validateForm();"  autocomplete="off">
			<input type="hidden" name="id" value="<?=$id?>" />
			<div class="blockfield">
				<label>Nome:</label>
				<input type="text" class="required" name="strUsername" value="<?=$strName?>" />
			</div><!--//blockfield-->
			
            <div class="blockfield">
				<label>E-mail:</label>
				<input type="text" class="required" name="strEmail" value="<?=$strEmail?>" />
			</div><!--//blockfield-->
            
            <div class="blockfield">
				<label>Telefone:</label>
				<input type="text" class="required" name="strPhone" value="<?=$strPhone?>" />
			</div><!--//blockfield-->
            
            <div class="blockfield">
				<label>Telefone 2:</label>
				<input type="text" class="required" name="strAltPhone" value="<?=$strAltPhone?>" />
			</div><!--//blockfield-->
            
            <div class="blockfield">
				<label>Nascimento:</label>
				<input type="text" class="required" name="dob" value="<?=$dob?>" />
			</div><!--//blockfield-->
            
            <div class="blockfield">
				<label>Código:</label>
				<input type="text" class="required" name="code" value="<?=$code?>" readonly/>
			</div><!--//blockfield-->

			<input class="btn main" type="submit" value="Save" />
		</form>
	<?php
	}
	//end of add Users
	?>
	</div>
</div>
</div>
<?php
include ("views/footer.php"); 
?>