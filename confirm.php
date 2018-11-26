<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>EdiFacilita - Cadastro de Condom&iacute;nio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
	<div id="signupForm">
		<div id="formCont" class="confirmPg">
			<img src="images/logo.png" alt="logo" />
			<h1>Cadastro Realizado com Sucesso!</h1>
			<p>Enviamos a confirma&ccedil;&atilde;o de cadastro para <?=$_SESSION['newEmail']?></p>
			<a href="index.php" class="btn main">Fazer Login</a>
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->
</body>
</html>
