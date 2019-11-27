<?php


	require_once "./components/BEGIN.php";
	require_once "./config.php";

	switch ($_REQUEST['action']) {
		case 'newUsuario':
			require_once "./action/newUsuario.php";
			break;

		case 'newEvento':
			require_once "/action/newEvento.php";
			break;

		case 'loginUsuairo':
			require_once "./action/loginUsuairo.php";
			break;

		case 'deleteEvento':
			require_once "./action/deleteEvento.php";
			break;

		default:
			# code...
			break;
	}

	require_once "./components/END.php";

?>
<section class="text-center col-sm-12 col-md-6"  style="margin: auto;">
	<a href="/home.php" class="btn btn-primary">Continuar</a>
</section>