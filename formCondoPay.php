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
            
            <div class="cf">
                <form method="post" action="#" id="payment" autocomplete="off">
                    <div id="free" class="cardPlan">
                        <input type="hidden" id="plan" name="plan" value="1" />
                        <div class="card">
                            <h2>Gratuito</h2>
                            <ul>
                                <li>At&eacute; 60 cadastros</li>
                                <li>Com Propagandas</li>
                            </ul>
                            <input id="subGratis" class="btn main" type="submit" value="Selecionar" />
                        </div><!--//card-->
                    </div>
                </form>

                <form method="post" action="#" id="payment2" autocomplete="off">
                    <div id="premium" class="cardPlan">
                        <input type="hidden" id="plan2" name="plan2" value="2" />
                        <div class="card">
                            <h2>Premium</h2>
                            <ul>
                                <li>At&eacute; 100 cadastros</li>
                                <li>Sem Propagandas</li>
                            </ul>
                            <input id="subPremium" class="btn main" type="submit" value="Selecionar" />
                        </div><!--//card-->
                    </div>
                </form><!--//payment form-->
            </div>
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/formValidation.js"></script>
	<script src="js/ajaxForm.js"></script>
</body>
</html>
