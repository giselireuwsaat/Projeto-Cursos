<?php
require "req/database.php";
require "req/funcoesLogin.php";
include "inc/head.php";

if(isset($_REQUEST['email']) && $_REQUEST ['email'] ){
    //pegando os valores dos inputs
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
//verificando se o usuario esta logado atraves da funcao
    $infoLogado = logarUsuario($email,$senha);


if($infoLogado==true) {
//criar a sessao
session_start();
//criando o campo nome na sessão
$_SESSION["nome"] = $infoLogado['nomeUsuario'];
//criando o campo email na sessão
$_SESSION["email"] = $email;
$_SESSION ["nivelAcesso"] = $infoLogado['tipoUsuario'];
$_SESSION ["logado"] = true;
header("Locantion:index.php");



    // função header serve para mandar o index
    header("location: index.php");
} else {
    $erro = "seu usuario não foi encontrado";
}
}

?>

<div class="page-center">
<h2>Login</h2>
<!-- mostra a mensagem de erro caso a variavel $erro esteja definida -->
<?php if (isset($erro)):?>
<div class="alert alert-danger">
<span><?php echo $erro;?></span>
</div>

<?php endif; ?>

<form action="login.php" method="post" class="col-md-7">



<div class="col-md-12">
    <label for="inputNome">Email</label>
    <input type="Email" name="email" class="form-control" id="inputEmail">
</div>

<div class="col-md-12">
    <label for="inputNome">Senha</label>
    <input type="password" name="senha" class="form-control" id="inputSenha">
</div>


<div class="col-md-12">
<button class = "btn btn-primary">Entrar</button>
<a href="cadastro.php" class="col-md-offset-9">Fazer cadastro!</a>
</div>

</form>


</div>


<?php 
include "inc/footer.php";
?>

