<?php

    $sql = "DELETE FROM `evento` WHERE `id` = ".$_GET['idEvento']."";

    $res = $conn->query($sql) or die($conn->error);
    
    if($res==true){
        print "<br><div class='alert alert-success'>Deletado com sucesso!</div>";
    }else{
        print "<br><div class='alert alert-danger'>Não foi possível deletar.</div>";
    }