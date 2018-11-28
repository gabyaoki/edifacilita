<?php
// $sql = "SELECT * FROM users WHERE id='".$_SESSION["userID"]."'";
// $logUser = Connect::runSql("singleData", $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edifacilita</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <nav>
        <a id="logoCms" href="dashboard.php"><img src="images/logo.png" alt="logo" /></a>

        <div class="options">
            <a href="dashboard.php">
                <i class="fas fa-home"></i><span class="label">In&iacute;cio</span>
            </a>
        </div><!-- //options -->
        
        <?php
        if(!isset($_SESSION["sindico"]["name"])) {
        ?>
            <div class="options">
                <a href="manage.php?area=users">
                    <i class="fas fa-user"></i><span class="label">Usu&aacute;rios</span>
                </a>
            </div><!-- //options -->
        <?php
        }
        ?>

        <div class="options">
            <a href="manage.php?area=projetos">
                <i class="fas fa-archive"></i><span class="label">Projetos</span>
            </a>
        </div><!-- //options -->

        <div class="options">
            <a href="manage.php?area=agenda">
                <i class="far fa-calendar-alt"></i><span class="label">Agenda</span>
            </a>
        </div><!-- //options -->

        <div class="options">
            <a href="models/logout.php">
                <i class="fas fa-times-circle"></i><span class="label">Sair</span>
            </a>
        </div><!-- //options -->
    </nav>