<?php
	
	require_once "./config.php";
    require_once "./components/nav.php";
    $meusEventos = true;
	require_once "./action/listarEvento.php";

?>
<br>
<br>
<section class="text-center col-sm-12 col-md-6"  style="margin: auto;">

<h1 class="text-color">Meus Eventos</h1>
<a href="/newEvento.php" class="btn" style="color: white;">Novo Evento</a>

<table class="table" style="color: #0595a9;">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Descricao</th>
        <th scope="col">Acoes</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i=0;
        while($row = $res_eventos->fetch_object()){
        $i++;
    ?>
        <tr>
        <th scope="row"><?php echo $i; ?></th>
        <td><?php echo $row->Titulo; ?></td>
        <td><?php echo $row->Descricao; ?></td>
        <td>
            <a href="/newEvento.php?idEvento=<?php echo $row->id; ?>&Titulo=<?php echo $row->Titulo; ?>&Descricao=<?php echo $row->Descricao; ?>" class="btn btn-primary">Atualizar</a>
            <a href="/action.php?idEvento=<?php echo $row->id; ?>&action=deleteEvento" class="btn btn-danger">Deletar</a>
        </td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>

</section>