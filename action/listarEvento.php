<?php
	
	$sql = "SELECT * FROM `evento`";

	if(isset($meusEventos))
	$sql .= " WHERE id_usuario = ".$_SESSION['id_usuario']."";

	if(isset($especifEvent))
	$sql .= " WHERE id = ".$_GET['id']."";

	$res_eventos = $conn->query($sql) or die($conn->error);
	
