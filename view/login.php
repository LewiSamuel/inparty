<header class="header-login">


<form class="form-login text-color text-center col-sm-12 col-md-4" action="./action/loginUsuario.php" method="POST">
<h1 class="text-color"><b>InParty</b></h1>
<?php
    if(isset($_GET['login']) && $_GET['login'] == 'false')
    echo "<b style='color:red;'>Falha no login</b>";
?>
<div class="form-group text-left" style="font-size: 13px;">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group text-left" style="font-size: 13px;">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="Senha" id="exampleInputPassword1" placeholder="Password">
</div>

<button type="submit" class="btn bg-color">Login</button>
<a href="./newUsuario.php" class="btn text-color btn-link">Cadastra-se</a>
</form>


</header>