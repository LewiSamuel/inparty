<?php
  if(!isset($_SESSION['id_usuario']) || $_SESSION["id_usuario"] == "" || $_SESSION["id_usuario"] == null)
  echo "<script> window.location.href = '/'; </script>"
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-color" href="/home.php"><b>InParty - <?php echo $_SESSION['nome']; ?></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/meusEventos.php">Meus Eventos</a>
      </li>
      <li class="nav-item" style="
    position: absolute;
    top: 7px;
    right: 15px;
">
        <a class="nav-link" href="/logout.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>