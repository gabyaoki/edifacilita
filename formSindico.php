<?php
$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";
?>
<!DOCTYPE html>
<html>
<head>
	<title>EdiFacilita - Cadastro do Síndico</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
<?php
if($_GET["error"]) {
	echo '<div class="alert errors">Por favor, revise os dados preenchidos.</div>';
}
?>
	<div id="signupForm">
		<div id="formCont">
			<img src="images/logo.png" alt="logo" />

			<h1>Cadastro do Síndico/Responsável</h1>

			<form method="post" action="#" id="signUp" autocomplete="off">

				<div id="moradorForm">
					<div class="blockfield">
						<label>Nome Completo:</label>
						<input id="name" type="text" class="required" name="name" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>E-mail:</label>
						<input id="email" type="text" class="required" name="email" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<div class="blockfield colLeft single">
							<label>Telefone:</label>
							<input id="phone" type="text" name="phone" />
						</div><!--//blockfield-->

						<div class="blockfield colRight single">
							<label>Celular:</label>
							<input id="phone2" type="text" class="required" name="phone2" />
						</div><!--//blockfield-->
						
						<div class="blockfield colLeft single">
							<label>Senha:</label>
							<input id="password" type="password" class="required" name="password" />
						</div><!--//blockfield-->

						<div class="blockfield colRight single">
							<label>Confirmar Senha:</label>
							<input id="confPass" type="password" class="required" name="confPass" />
						</div><!--//blockfield-->

						<div class="blockfield colLeft single">
							<label>Data de Nascimento:</label>
							<input id="dob" type="date" class="required" name="dob" />
						</div><!--//blockfield-->
					</div>

					<input id="subSindico" class="btn main" type="submit" value="Cadastrar" />
				</div>
			</form><!--//signUp form-->
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/formValidation.js"></script>
	<script src="js/ajaxForm.js"></script>

	<script>
		$('#confPass').keyup(function() {
			var pass = $('#password').val();
			var passConf = $('#confPass').val();

			if(pass != passConf) {
				$('#confPass').addClass('error');
			} else {
				$('#confPass').removeClass('error');
			}
		});
	</script>
</body>
</html>
