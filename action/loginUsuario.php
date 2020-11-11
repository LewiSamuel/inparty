<?php
	require_once "../config.php";

	$sql = "SELECT * FROM `usuario` WHERE Email = '".$_POST['Email']."' AND Senha = '".$_POST['Senha']."'";

	$res_usuario_login = $conn->query($sql) or die($conn->error);


	if($res_usuario_login->num_rows == 1){
		while($row = $res_usuario_login->fetch_object()){
			$_SESSION['id_usuario'] = $row->id;
			$_SESSION['nome'] = $row->Nome;
			$_SESSION['email'] = $row->Email;
			header("Location: ../home.php");
		}
	}else{
		header("Location: /?login=false");
	}
