<?php
  if(!isset($_SESSION['id_usuario']))
  header("Location: /");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-color" href="/"><b>InParty</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/home.php">Todos Eventos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/meusEventos.php">Meus Eventos</a>
      </li>
    </ul>
  </div>
</nav>