<?php 
include ("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edifacilita</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
	<div id="signupForm">
		<div id="formCont">
			<img src="images/logo.png" alt="logo" />

			<h1>Formulário de Cadatro</h1>

			<form method="post" action="#" onsubmit="return validateForm()" id="signUp" autocomplete="off">

				<div class="blockfield radio">
					<input type="radio" name="typeUser" value="1" /><span>Condomínio</span>
					<input type="radio" name="typeUser" value="2" /><span>Morador</span>
				</div><!--//blockfield-->

				<div id="moradorForm">
					<div class="blockfield">
						<label>Nome Completo:</label>
						<input type="text" class="required" name="name" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>E-mail:</label>
						<input type="text" class="required" name="email" />
					</div><!--//blockfield-->

					<div class="blockfield colLeft single">
						<label>Telefone:</label>
						<input type="text" class="required" name="tel" />
					</div><!--//blockfield-->

					<div class="blockfield colRight single">
						<label>Celular:</label>
						<input type="text" class="required" name="cel" />
					</div><!--//blockfield-->
					
					<div class="blockfield colLeft single">
						<label>Senha:</label>
						<input type="password" class="required" name="senha" />
					</div><!--//blockfield-->

					<div class="blockfield colRight single">
						<label>Confirmar Senha:</label>
						<input type="password" class="required" name="confSenha" />
					</div><!--//blockfield-->

					<div class="blockfield colLeft single">
						<label>Data de Nascimento:</label>
						<input type="date" class="required" name="dob" />
					</div><!--//blockfield-->

					<div class="blockfield colRight single">
						<label>Código de Acesso:</label>
						<input type="text" class="required" name="accessCode" />
					</div><!--//blockfield-->

					<input id="submitForm" class="btn main" type="submit" value="Cadastrar" />
				</div>
				
				
			</form><!--//login form-->
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->
	<script src="js/formValidation.js"></script>
</body>
</html>
