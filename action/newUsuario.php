<?php

	$sql = "INSERT INTO `usuario`(`Nome`, `Email`, `Senha`) VALUES ('".$_POST['Nome']."','".$_POST['Email']."','".$_POST['Senha']."')";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
	}else{
		print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
	}