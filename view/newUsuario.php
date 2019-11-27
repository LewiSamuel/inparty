<form class="text-color text-center col-sm-12 col-md-4" action="./action.php" style="margin: auto;" method="POST">
	<h1 class="text-color">Crie sua conta</h1>

	<input type="hidden" name="action" value="newUsuario">

<div class="form-group text-left">
<label for="Nome"><b>Nome</b></label>
<input type="text" class="form-control" id="Nome" name="Nome" placeholder="Seu nome">
</div>

<div class="form-group text-left">
<label for="exampleInputEmail1"><b>Email</b></label>
<input type="email" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Email">
</div>

<div class="form-group text-left">
<label for="exampleInputPassword1"><b>Password</b></label>
<input type="password" class="form-control" id="exampleInputPassword1" name="Senha" placeholder="Password">
</div>

<button type="submit" class="btn bg-color">Criar conta</button>
</form>