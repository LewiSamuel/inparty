<?php

	if(isset($_POST['idEvento']) && $_POST['idEvento'] != ""){
		$sql = "UPDATE `evento` SET
						`Titulo`= '".$_POST['Titulo']."',
						`Descricao`= '".$_POST['Descricao']."'
					WHERE 
						`id` = '".$_POST['idEvento']."'";

		$res = $conn->query($sql) or die($conn->error);
		
		if($res==true){
			print "<br><div class='alert alert-success'>Atualizado com sucesso!</div>";
		}else{
			print "<br><div class='alert alert-danger'>Não foi possível atualizar.</div>";
		}

	}else{
		$sql = "INSERT INTO `evento`(`id_usuario`, `Titulo`, `Descricao`) VALUES (".$_SESSION['id_usuario'].",'".$_POST['Titulo']."','".$_POST['Descricao']."')";

		$res = $conn->query($sql) or die($conn->error);
		
		if($res==true){
			print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
		}else{
			print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
		}
	}
	