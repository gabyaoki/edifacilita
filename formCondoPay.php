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

			<h1>Selecione um Plano</h1>

			<form method="post" action="#" onsubmit="return validateForm()" id="payment" autocomplete="off">

				<div id="free" class="cardPlan">
					<input type="hidden" name="plan" value="free" />
					<div class="card">
						<h2>Gratuito</h2>
						<ul>
							<li>At&eacute; 60 cadastros</li>
							<li>Com Propagandas</li>
						</ul>
						<a href="#" class="btn sec">Selecionar</a>
					</div><!--//card-->
				</div>

				<div id="premium" class="cardPlan">
					<input type="hidden" name="plan" value="premium" />
					<div class="card">
						<h2>Premium</h2>
						<ul>
							<li>At&eacute; 100 cadastros</li>
							<li>Sem Propagandas</li>
						</ul>
						<a href="#" class="btn sec">Selecionar</a>
					</div><!--//card-->
				</div>

				<input id="submitForm" class="btn main" type="submit" value="Confirmar" />
			</form><!--//payment form-->
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->
	<script src="js/formValidation.js"></script>
</body>
</html>
