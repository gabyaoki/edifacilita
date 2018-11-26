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

			<form method="post" action="#" id="signUp" autocomplete="off">

				<div id="condoForm">
					<div class="blockfield">
						<label>Nome do Condom&iacute;nio:</label>
						<input id="name" type="text" class="required" name="name" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>Endere&ccedil;o Completo:</label>
						<input id="endereco" type="text" class="required" name="endereco" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>E-mail:</label>
						<input id="email" type="text" class="required" name="email" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<label>S&iacute;ndico/Empresa Administradora:</label>
						<input id="sindico" type="text" class="required" name="sindico" />
					</div><!--//blockfield-->

					<div class="blockfield">
						<div class="blockfield colLeft single">
							<label>Telefone:</label>
							<input id="phone" type="text" class="required" name="phone" />
						</div><!--//blockfield-->

						<div class="blockfield colRight single">
							<label>Telefone 2:</label>
							<input id="phone2" type="text" name="phone2" />
						</div><!--//blockfield-->
						
						<div class="blockfield colLeft single">
							<label>Senha:</label>
							<input id="password" type="password" class="required" name="password" />
						</div><!--//blockfield-->

						<div class="blockfield colRight single">
							<label>Confirmar Senha:</label>
							<input id="confPass" type="password" class="required" name="confPass" />
						</div><!--//blockfield-->

						<div class="blockfield reg">
							<input id="checkReg" type="checkbox" class="required" name="checkReg" />
							<span>Li e Concordo com o <a class="modal" id="regulamento" href="#">regulamento do EdiFacilita</a></span>
						</div><!--//blockfield-->
					</div>

					<input id="subCondo" class="btn main" type="submit" value="Selecionar Plano" />
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
