<?php
	
    $sql = "SELECT * FROM `postagem`  WHERE id_evento = ".$_GET['id']."";

	$res_postagens_evento = $conn->query($sql) or die($conn->error);
	
