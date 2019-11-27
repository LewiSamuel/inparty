<?php
   
	require_once "./config.php";
    require_once "./components/nav.php";
    $especifEvent = true;
    require_once "./action/listarEvento.php";
    
    if(isset($_POST['novaPostagem']))
    require_once "./action/novaPostagem.php";
    
    if(isset($_GET['iddeletepostagem']))
    require_once "./action/deletePostagem.php";

	require_once "./action/listarPostagem.php";

while($row = $res_eventos->fetch_object()){
 ?>

    <img src="/img/card-party.jpg" alt="back" style="width: 100%; height: 400px; object-fit:cover;">

    <section class=" text-color  col-sm-12 col-md-8" style="margin: auto;">
    <br>
    <br>
    <h1 class="card-title"><?php echo $row->Titulo; ?></h1>
    <p class="card-text"><?php echo $row->Descricao; ?></p>
    <?php
        if($row->id_usuario == $_SESSION['id_usuario']){
    ?>
          
        <small>Você é o criador do evento</small>
        <hr>
        <form class="form-group" method="POST">
        <label for="postagem">Nova Postagem</label>
        <textarea class="form-control" id="postagem" rows="3" name="novaPostagem" style="
            background-color: #3c3c3c;
            color: white;
            border-color: #505050;
        "></textarea>
        <button type="submit" class="btn bg-color" style="
            float: right;
            margin-top: 10px;
        ">Postar</button>
        </form>
            
    <?php
        }else{
            echo '<a href="#" class="btn btn-primary">Participar</a>';
        }
    ?>
    <hr>
    <br>
    <?php
        $i=0;
        while($rowEvento = $res_postagens_evento->fetch_object()){
            $i++;
    ?>
    <div style="
    font-variant: all-petite-caps;
    padding: 30px;
    border-bottom: 1px solid #3c3c3c;
    background-color: #272727;">
    <small style="float: right;"><?php echo date("d/m/Y", strtotime($rowEvento->data)); ?></small>
    <p class='form-group-<?php echo $i; ?>'><?php echo $rowEvento->postagem ?></p>

    <?php if($row->id_usuario == $_SESSION['id_usuario']){ ?>
    <a href="#!"  onclick="$('.form-group-<?php echo $i; ?>').toggle();"><small>Editar</small></a>
    <a href="/evento.php?id=<?php echo $_GET['id']; ?>&iddeletepostagem=<?php echo $rowEvento->id; ?>"><small>Deletar</small></a>
    <?php } ?>


    <form class="form-group-<?php echo $i; ?>" method="POST" style="display: none;">
        <input type="hidden" name="idPostagem" value="<?php echo $rowEvento->id; ?>">
        <label for="postagem">Editar Postagem</label>
        <textarea class="form-control" id="postagem" rows="3" name="novaPostagem" style="
            background-color: #3c3c3c;
            color: white;
            border-color: #505050;
        "><?php echo $rowEvento->postagem ?></textarea>
        <button type="submit" class="btn bg-color" style="
            float: right;
            margin-top: 10px;
        ">Editar</button>
    </form>

    </div>
    <?php
        }
    ?>
    </section>
    <?php
}

 ?>