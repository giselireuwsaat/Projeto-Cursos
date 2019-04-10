<?php
include "inc/head.php";
include "inc/header.php";
require "inc/funcoes.php"; 
// require serve para chamar função

$nomeCompleto = $_REQUEST["nomeCompleto"];
$CPF = $_REQUEST["CPF"];
$nroCartao = $_REQUEST["nroCartao"];
$validade = $_REQUEST["validade"];
$CVV = $_REQUEST["CVV"];
$nomeCurso = $_REQUEST["nomeCurso"];
$precoCurso = $_REQUEST["precoCurso"];
$erros =[];



validadorCompra($nomeCompleto,$CPF,$nroCartao,$validade,$CVV);
?>

<!-- // print_r($erros); mostrar a array

//substr pega um caractere a partir de um momento... igual a função do excel ext.texto...pega parte


// var_dump(validadorNome($nome));
// exit;

// var_dump(validadorCpf($CPF));
// exit;

// var_dump(validadorNroCartao($nroCartao));
// exit;

// var_dump(validadorData($validade));
// exit; -->





    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <?php if (count($erros)>0) :?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <span> Preencha os seus dados corretamente! </span>

                </div>
                <div class="panel-body">
                    <ul class="list-group">
                       <?php foreach ($erros as $chave => $valorErro) : ?>
                        <li class="list-group-item">
                        <?= $valorErro;?>
                        </li>
                <?php endforeach;?>
                       
                    </ul>
                    <div class="center"><a href="index.php">voltar para home</a>
                    </div>
                </div>



            </div>
            <?php else: ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span> Compra realizada com sucesso </span>

                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome Curso:</strong> <?=$nomeCurso;?> </li>
                        <li class="list-group-item"><strong>Preço: R$</strong> <?php echo $precoCurso; ?></li>
                        <li class="list-group-item"><strong>Nome Completo:</strong> <?php echo $nome; ?></li>
                    </ul>
                    <div class="center"><a href="index.php">voltar para home</a>
                    </div>
                </div>



            </div>
            <?php endif;?>


        </div>

    </div>

<?php include "inc/footer.php";?>

