<?php 
    require "req/funcoesLogin.php";
    include "inc/head.php";

    //validando se o formulario foi enviado
    if($_REQUEST){
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $confirmarSenha = $_REQUEST["confirmarSenha"];
        // $md5= md5($senha);
        // echo $senha."<br>";
        // echo $md5;
        // $hash = password_hash($senha,PASSWORD_DEFAULT);
        // echo $hash;

        // exit;


        // ou usar $_POS["nome"];
        
        // echo $nome ." " . $email ." " . $senha ." " . $confirmarSenha;
        // exit;

        //verifica se a senha é igual ao confirmar a senha
        if($senha == $confirmarSenha){
            //criptografar a senha
            $senhaCrip = password_hash($senha,PASSWORD_DEFAULT);
            //criando novo usuario
            $novoUsuario =[
            "nome" =>$nome,
            "email"=>$email,
            "senha"=>$senhaCrip,
            ];
            //se tudo der certo eu cadastro o usuario dentro do json
            $cadastrou = cadastrarUsuario($novoUsuario);

    }else {$erro="senha incompatível";
        
    }
}

?>


<div class = "page-center">
<h2>cadastre-se</h2>
<?php if (isset ($cadastrou)&& $cadastrou): ?>
<div class="alert alert-success" role="alert">
<span> Usuario cadastrado com sucesso</span>

</div>

<?php elseif (isset($erro)):?>
<div class="alert alert-danger" role="alert">
<?php echo $erro?>
</div>
<?php endif; ?> 




<form action="cadastro.php" method="post" class="col-md-7">


<div class="col-md-12">
    <label for="inputNome">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputNome">
</div>

<div class="col-md-12">
    <label for="inputNome">Email</label>
    <input type="Email" name="email" class="form-control" id="inputEmail">
</div>

<div class="col-md-12">
    <label for="inputNome">Senha</label>
    <input type="password" name="senha" class="form-control" id="inputSenha">
</div>

<div class="col-md-12">
    <label for="inputNome">Confirme sua senha</label>
    <input type="password" name="confirmarSenha" class="form-control" id="inputConfirmarSenha">
</div>

<div class="col-md-12">
<button class = "btn btn-primary">Cadastrar</button>
<a href="login.php" class="col-md-offset-9">Fazer login!</a>
</div>

</form>

</div>

