<?php 
include ("connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php");
$_SESSION['strSindico'] = "Seu Zé";
$_SESSION['strCondo'] = "Ed. Villa Di Lucca";
?>
<style>
    #dashboardContainer{
        padding-left: 150px;
        width: 100%;
        min-height: 100%;
        position: relative;
        display: inline-block;
    }
    .dashboard-row{
        width: 100%;
        display: inline-block;
        overflow: auto;
        position: relative;
    }
    .dashboard-row>*{
        height: 100%;
        float: left;
        position: relative;
    }
    #condoinfo{
        width: 50%;
        position: relative;
    }
    #condoinfo-picture{
        height: 295px;
    }
    #sindicoinfo{
        width: 50%;
        position: relative;
        text-align: right;
    }
    #sindicoinfo-picture{
        display: inline-block;
        width: 150px;
        height: 200px;
    }
    #sindicoinfo-bio{
        width: 60%;
        padding: 8px;
        text-align: left;
        display: inline-block;
    }
    #sindicoinfo-bio .bio-row {
        padding: 4px 0;
        border-bottom: 2px #eee solid;
        display: flex;
        flex-direction: row;
    }
    #sindicoinfo-bio .bio-cell:first-child{
        flex-grow: 1;        
    }
    .condo-projects{
        width: 100%;
        padding: 20px 0;
        display: flex;
        justify-content: center;
    }
    .condo-projects-options{
        width: 180px;
        padding: 30px;
        text-align: center;
        border: 2px #eee solid;
        border-radius: 5px;
		margin: 0 20px;
    }
    .condo-projects-options .fa-clipboard{
        color: #3c3c3c;
        font-size: 80px;
        position: relative;
        display: inline-block;
    }
    .condo-projects-options .fa-check{
        color: #7af456;
        font-size: 30px;
        position: absolute;
        bottom: 10px;
        right: -5px;
    }
    .condo-projects-options .fa-check:nth-child(2){
        color: #5cc73c;
        right: -15px;
    }
    .condo-projects-options .fa-pen{
        color: #00b1ff;
        font-size: 30px;
        position: absolute;
        bottom: 20px;
        right: -15px;
    }
	#advertising{
		height: 200px;
		width: 100%;
		padding: 60px;
		text-align: center;
		background: #3c3c3c;
		color: #fff;
	}
	#advertising h4{
		font-size: 50px;
	}
</style>
<section id="dashboardContainer">
	<div id="dashboard">
		<h1>Bem vindo ao EdiFacilita!</h1>
		<div class="dashboard-row">
            <div id="condoinfo">
                <div id="condoinfo-picture" class="bgCont">
                    <img class="bgImg" src="assets/bg.jpg" alt="foto do condom&iacute;nio">
                </div>
                <h3 id="condoinfo-name">
                    <?=$_SESSION['strCondo']?>
                </h3>
                <a href="#" class="btn main"> Regulamento </a>
            </div>
            <div id="sindicoinfo">
                <div id="sindicoinfo-picture" class="bgCont">
                    <img class="bgImg" src="assets/sindico.jpg" alt="foto do sindico">
                </div>
                <h3 id="sindicoinfo-name">
                    <?=$_SESSION['strSindico']?>
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
            </div>
        </div>
        <div class="dashboard-row">
            <div class="condo-projects">
                <div class="condo-projects-options">
                    <span class="far fa-clipboard"><span class="fas fa-check"></span><span class="fas fa-check"></span></span>
                    <p>Projetos Finalizados</p>
                </div>
                <div class="condo-projects-options">
                    <span class="far fa-clipboard"><span class="fas fa-check"></span></span>
                    <p>Projetos em Andamento</p>
                </div>
                <div class="condo-projects-options">
                    <span class="far fa-clipboard"><span class="fas fa-pen"></span></span>
                    <p>Projetos Aprovados</p>
                </div>
            </div>
        </div>
        <div class="dashboard-row">
            <div class="condo-projects">
                <div class="condo-projects-options">
                    <span class="far fa-clipboard"><span class="fas fa-check"></span><span class="fas fa-check"></span></span>
                    <p>Agenda de Reuniões</p>
                </div>
                <div class="condo-projects-options">
                    <span class="far fa-clipboard"><span class="fas fa-check"></span></span>
                    <p>Registro de Atas</p>
                </div>
                <div class="condo-projects-options">
                    <span class="far fa-clipboard"><span class="fas fa-pen"></span></span>
                    <p>Votação de Novos Projetos</p>
                </div>
            </div>
        </div>
        <div class="dashboard-row">
           <div id="advertising">
               <h4> Propaganda </h4>
           </div>
        </div>
	</div><!-- //dashboard -->
</section><!-- //container -->

<?php
include ("views/footer.php"); 
?>