<?php
    // actions
    // enviar email de confirmação
    if(isset($_POST['sendMail'])){

        $Email = $_POST['Email'];
        $EmailEncoded = base64_encode($Email);
        $LinkParaRecuperarSenha = "https://in-party.herokuapp.com/recovery.php?a=new&q=".$EmailEncoded;

        // configurar email
        $to = $Email;
        $subject = "Recovery Password";
        $txt = "Atualize sua senha: ".$LinkParaRecuperarSenha;
        $headers = "From: dont-reply@in-party.herokuapp.com" . "\r\n" .
        "CC: somebodyelse@in-party.herokuapp.com";

        echo "<script>console.log('?a=new&q=".$EmailEncoded."')</script>";
        // enviar email
        mail($to,$subject,$txt,$headers);

    }

    // atualizar senha
    if(isset($_POST['updateSenha'])){

        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Password2 = $_POST['Password2'];

        // Query para atualizar senha
        $sql = "UPDATE `usuario`
        SET Senha='".$Password."'
        WHERE Email='".$Email."' ";

		$res = $conn->query($sql) or die($conn->error);
		
		if($res==true){
            print "<div style='position:fixed;' class='alert alert-success'>Atualizado com sucesso! 
                <a href='/'>Voltar</a>
            </div>";
		}else{
            print "<div style='position:fixed;' class='alert alert-danger'>Não foi possível atualizar. 
                <a href='/'>Voltar</a>
            </div>";
		}
    }
?>
<header class="header-login">
<form class="form-login text-color text-center col-sm-12 col-md-4" action='' method="POST">


<h3 class="text-color"><b>InParty <br> Recuperar Senha</b></h3>

<?php
    switch ($_GET['a']) {
        case 'new':
        $EmailDecoded = base64_decode($_GET['q']); 
?>
    <input type="hidden" name="Email" value="<?php echo $EmailDecoded; ?>">
    
    <div class="form-group text-left" style="font-size: 13px;">
    <label for="pass1">Password</label>
    <input type="password" class="form-control" name="Password" id="pass1" placeholder="Password">
    </div>

    <div class="form-group text-left" style="font-size: 13px;">
    <label for="pass2">Confirm Password</label>
    <input type="password" class="form-control" name="Password2" id="pass2" placeholder="Repeat password">
    </div>
    <button type="submit" name="updateSenha" class="btn bg-color">Atualizar senha</button>

<?php
        break;
        




        default:
?>

    <div class="form-group text-left" style="font-size: 13px;">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <button type="submit" name="sendMail" class="btn bg-color">Recuperar senha</button>

<?php
        break;
    }
?>



</form>
</header>