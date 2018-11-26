<?php 
include ("connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php"); 
?>

<section class="container">
	<div id="dashboard">
		<h1>Hello, <?=$logUser['strUsername']?></h1>
		<p>Here you can add, update and delete some of the content.</p>
		<p>To unlock more functionalities or help, please contact our support.</p>
	</div><!-- //dashboard -->
</section><!-- //container -->

<?php
include ("views/footer.php"); 
?>