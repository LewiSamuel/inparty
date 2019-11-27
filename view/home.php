<?php
	
	require_once "./config.php";
	require_once "./components/nav.php";
	require_once "./action/listarEvento.php";
?>

<div class="container"  style="margin-top: 50px;">
  <div class="row">
 

 <?php
while($row = $res_eventos->fetch_object()){
 ?>

<article class="col-sm-12 col-md-4" >
	<article class="card card-event">
	<img src="./img/card-party-2.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title">
			<a href="/evento.php?id=<?php echo $row->id; ?>">
				<?php echo $row->Titulo; ?>
			</a>
		</h5>
		<p class="card-text"><?php echo $row->Descricao; ?></p>
		<?php
			if($row->id_usuario == $_SESSION['id_usuario'])
				echo '<small>Você é o criador do evento</small>';
			else
				echo '<a href="#" class="btn btn-primary">Participar</a>';
		?>
		</div>
	</article>
</article>
 <?php
}

 ?>



</div>
</div>