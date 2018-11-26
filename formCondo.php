<!DOCTYPE html>
<html>
<head>
	<title>EdiFacilita - Cadastro de Condom&iacute;nio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
	<div id="signupForm">
		<div id="formCont">
			<img src="images/logo.png" alt="logo" />

			<h1>Cadastro de Condom&iacute;nio</h1>

			<form method="post" action="#" onsubmit="return validateForm()" id="signUp" autocomplete="off">

				<div id="condoForm">
					<div class="blockfield">
						<label>Nome do Condom&iacute;nio:</label>
						<input type="text" class="required" name="name" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>Endere&ccedil;o:</label>
						<input type="text" class="required" name="endereco" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>E-mail:</label>
						<input type="text" class="required" name="email" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>S&iacute;ndico/Empresa Administradora:</label>
						<input type="text" class="required" name="sindico" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<div class="blockfield colLeft single">
							<label>Telefone:</label>
							<input type="text" class="required" name="tel" />
						</div><!--//blockfield-->

						<div class="blockfield colRight single">
							<label>Telefone 2:</label>
							<input type="text" class="required" name="telSec" />
						</div><!--//blockfield-->
						
						<div class="blockfield colLeft single">
							<label>Senha:</label>
							<input type="password" class="required" name="senha" />
						</div><!--//blockfield-->

						<div class="blockfield colRight single">
							<label>Confirmar Senha:</label>
							<input type="password" class="required" name="confSenha" />
						</div><!--//blockfield-->

						<div class="blockfield reg">
							<input type="checkbox" class="required" name="regulamento" />
							<span>Li e Concordo com o <a class="modal" id="regulamento" href="#">regulamento do EdiFacilita</a></span>
						</div><!--//blockfield-->
					</div>

					<input id="submitForm" class="btn main" type="submit" value="Selecionar Plano" />
				</div>
			</form><!--//signUp form-->
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->

	<div id="modalReg">
		<div class="container">
			<h2>Regulamento</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<a id="closeReg" onclick="return false;" href="#" class="btn main">Fechar</a>
		</div>
	</div>
	<script src="js/formValidation.js"></script>
	<script>
		var close = document.getElementById('closeReg');
		var modal = document.getElementById('modalReg');
		var link = document.getElementById('regulamento');

		close.addEventListener('click', function() {
			modal.style.display = 'none';
		});

		link.addEventListener('click', function() {
			modal.style.display = 'block';
		});
	</script>
</body>
</html>
