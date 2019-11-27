<?php
	
	require_once "./config.php";
	require_once "./components/nav.php";

?>
<br>
<br>

<form class=" text-color text-center col-sm-12 col-md-4" action="./action.php" style="margin: auto;" method="POST">

	<h1 class="text-color">
		<?php
			if(isset($_GET['idEvento'])){
				echo "Atualizar evento";
			}else{
				echo "Criar novo evento";
			}
		?>
	</h1>

	<input type="hidden" name="action" value="newEvento">
	<input type="hidden" name="idEvento" value="<?php echo @$_GET['idEvento']; ?>">


<div class="form-group text-left">
<label for="Titulo">Titulo</label>
<input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Titulo Evento" value="<?php echo @$_GET['Titulo']; ?>">
</div>

<div class="form-group text-left">
<label for="Descricao">Descricao</label>
<input type="text" class="form-control" id="Descricao" name="Descricao" placeholder="Descricao Evento" value="<?php echo @$_GET['Descricao']; ?>">
</div>

<button type="submit" class="btn bg-color">Submit</button>
</form>