<?php 
    include "inc/head.php";
    include "inc/header.php";
    require "req/funcoesValidacao.php";
    // variáveis
    $nome = $_REQUEST["nomeCompleto"];
    $cpf = $_REQUEST["cpf"];
    $nroCartao = $_REQUEST["nroCartao"];
    $validade = $_REQUEST["validade"];
    $cvv = $_REQUEST["cvv"]; 
    $nomeCurso = $_REQUEST["nomeCurso"];
    $precoCurso = $_REQUEST["precoCurso"]; 
    $erros = [];

    

    validarCompra($nome, $cpf, $nroCartao, $validade, $cvv);
?>

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <?php if (count($erros) > 0) : ?>
        <div class="panel panel-danger">
            <div class="panel-heading">
                <span>Preencha seus dados corretamente!</span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php foreach ($erros as $chave => $valorErro) : ?>
                    <li class="list-group-item">
                        <?= $valorErro; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div class="center">
                    <a href="index.php">Voltar para home</a>
                </div>
            </div>
        </div>
        <<<<<<< HEAD <?php else : ?> <div class="panel panel-primary">
            <div class="panel-heading">
                <span>Compra realizada com sucesso!</span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nome Curso: </strong> <?= $nomeCurso; ?> </li>
                    <li class="list-group-item"><strong>Preço: R$ </strong> <?= $precoCurso; ?> </li>
                    <li class="list-group-item"><strong>Nome Completo: </strong> <?php echo $nome; ?></li>
                </ul>
                <div class="center">
                    <a href="index.php">Voltar para home</a>
                </div>
                =======



            </div>
            <?php else: ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span> Compra realizada com sucesso </span>

                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome Curso:</strong> <?php echo $nomeCurso;?> </li>

                        <li class="list-group-item"><strong>Preço: R$</strong> <?php echo $precoCurso; ?></li>
                        <li class="list-group-item"><strong>Nome Completo:</strong> <?php echo $nomeCompleto; ?></li>
                    </ul>
                    <div class="center"><a href="index.php">voltar para home</a>
                        >>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
                    </div>
                </div>
                <?php endif; ?>
            </div>
    </div>
    <?php include "inc/footer.php"; ?>