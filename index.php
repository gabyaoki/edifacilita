<?php 
$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>EdiFacilita</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
	<div id="bgLogin">
		<div id="loginCont">
			<img src="images/logo.png" alt="logo" />

			<form method="post" action="models/checkLogin.php" onsubmit="return validateForm()" id="login" autocomplete="off">
				<div class="blockfield">
					<label>Login:</label>
					<input type="text" class="required" name="email" placeholder="email">
				</div><!--//blockfield-->
				
				<div class="blockfield">
					<label>Senha:</label>
					<input type="password" class="required" name="senha" placeholder="senha">
				</div><!--//blockfield-->
				
				<input id="submitForm" class="btn main" type="submit" value="Entrar">

				<a id="cadastre" href="signUp.php" class="btn sec">Cadastre-se</a>

				<?php
				if ($_GET["error"])
				{
					echo "<div class='msg errors'>Login ou senha errados, por favor, tente novamente.</div>";
				}
				?>
			</form><!--//login form-->
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->
	<script src="js/formValidation.js"></script>
</body>
</html>
