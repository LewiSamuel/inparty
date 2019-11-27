<?php

    if(isset($_POST['idPostagem']) && $_POST['idPostagem'] != ""){
		$sql = "UPDATE `postagem` SET
						`postagem`= '".$_POST['novaPostagem']."'
					WHERE 
						`id` = '".$_POST['idPostagem']."'";

		$res = $conn->query($sql) or die($conn->error);
		
		if($res==true){
			print "<br><div class='alert alert-success'>Atualizado com sucesso!</div>";
		}else{
			print "<br><div class='alert alert-danger'>Não foi possível atualizar.</div>";
		}

	}else{
		$sql = "INSERT INTO `postagem`(`id_evento`, `postagem`, `Data`) VALUES (".$_GET['id'].",'".$_POST['novaPostagem']."',NOW())";

		$res = $conn->query($sql) or die($conn->error);
		
		if($res==true){
			print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
		}else{
			print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
		}
	}
	