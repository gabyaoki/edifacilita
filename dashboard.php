<?php
include ("connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php");

?>
<section id="dashboardContainer">
	<div id="dashboard">
		<h1>Bem vindo ao EdiFacilita!</h1>
		<div class="dashboard-row" id="condoInfo">
            <div id="condoinfo">
                <div id="condoinfo-picture" class="bgCont">
                    <img class="bgImg" src="assets/bg.jpg" alt="foto do condom&iacute;nio">
                </div>
                <h3 id="condoinfo-name">
                    <?=$_SESSION["condo"]["name"]?>
                </h3>
                <a href="#" class="modal" id="regulamento">(Leia o Regulamento)</a>
            </div>
            <div id="sindicoinfo">
                <div id="sindicoinfo-picture" class="bgCont">
                    <img class="bgImg" src="assets/sindico.jpg" alt="foto do sindico">
                </div>
            <?php
            if(isset($_SESSION["sindico"])) {
            ?>
                <h3 id="sindicoinfo-name">
                    <?=$_SESSION["sindico"]["name"]?>
                </h3>
                <div id="sindicoinfo-bio">
                    <div class="bio-row">
                        <div class="bio-cell">
                            <p>Síndico há:</p>
                        </div>
                        <div class="bio-cell">
                            <p><a href="#">2 anos</a></p>
                        </div>
                    </div>
                    <div class="bio-row">
                       <div class="bio-cell">
                           <p>Projetos Realizados:</p>
                       </div>
                       <div class="bio-cell">
                           <p><a href="#">8</a></p>
                        </div>
                    </div>
                    <div class="bio-row">
                        <div class="bio-cell">
                            <p>Projetos em Andamento:</p>
                        </div>
                        <div class="bio-cell">
                            <p><a href="#">2</a></p>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <h3 id="sindicoinfo-name">
                    Bem vindo, <?=$_SESSION["currentUser"]["name"]?>
                </h3>
            <?php
            }
            ?>
            </div>
        </div>
        <div class="dashboard-row">
            <div class="condo-projects">
                <div class="condo-projects-options">
                    <a href="#"><span class="far fa-clipboard"><span class="fas fa-check"></span><span class="fas fa-check"></span></span>
                    <p>Projetos Finalizados</p></a>
                </div>
                <div class="condo-projects-options">
                    <a href="#"><span class="far fa-clipboard"><span class="fas fa-check"></span></span>
                        <p>Projetos em Andamento</p></a>
                </div>
                <div class="condo-projects-options">
                    <a href="#"><span class="far fa-clipboard"><span class="fas fa-pen"></span></span>
                        <p>Projetos Aprovados</p></a>
                </div>
            </div>
        </div>
        <div class="dashboard-row">
            <div class="condo-projects">
                <div class="condo-projects-options">
                    <a href="#"><span class="far fa-clipboard"><span class="fas fa-check"></span><span class="fas fa-check"></span></span>
                        <p>Agenda de Reuniões</p></a>
                </div>
                <div class="condo-projects-options">
                    <a href="#"><span class="far fa-clipboard"><span class="fas fa-check"></span></span>
                        <p>Registro de Atas</p></a>
                </div>
                <div class="condo-projects-options">
                    <a href="#"><span class="far fa-clipboard"><span class="fas fa-pen"></span></span>
                        <p>Votação de Novos Projetos</p></a>
                </div>
            </div>
        </div>
    <?php
    if($_SESSION["condo"]["plan"] == 1) {
    ?>
        <div class="dashboard-row">
           <div id="advertising">
               <h4> Propaganda </h4>
           </div>
        </div>
    <?php
    }
    ?>
	</div><!-- //dashboard -->
</section><!-- //container -->

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

<?php
include ("views/footer.php"); 
?>