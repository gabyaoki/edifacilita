<?php
$_GET["delete"] = (isset($_GET["delete"]))?$_GET["delete"]:"";
$_GET["add"] = (isset($_GET["add"]))?$_GET["add"]:"";
$_GET["edit"] = (isset($_GET["edit"]))?$_GET["edit"]:"";

	if ($_GET["delete"])
	{
		echo "<div class='msg ok'>Deletado com sucesso</div>";
	}

	if ($_GET["add"])
	{
		echo "<div class='msg ok'>Adicionado com sucesso</div>";
	}

	if ($_GET["edit"])
	{
		echo "<div class='msg ok'>Editado com sucesso</div>";
	}
?>