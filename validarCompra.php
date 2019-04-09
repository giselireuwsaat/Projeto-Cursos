<?php
$nomeCompleto = $_REQUEST["nomeCompleto"];
$CPF = $_REQUEST["CPF"];
$nroCartao = $_REQUEST["nroCartao"];
$validade = $_REQUEST["validade"];
$CVV = $_REQUEST["CVV"];
$nomeCurso = $_REQUEST["nomeCurso"];
$precoCurso = $_REQUEST["precoCurso"];
$erros =[];

//funções

function validadorNome($nomeCompleto) {
    return strlen ($nomeCompleto) > 0 && strlen ($nomeCompleto) <=15; 
    // strlen pega o tamanho da string
}

function validadorCpf($CPF){
    return strlen ($CPF) == 11;
}

function validadorNroCartao($nroCartao){
    $primeiroNum = substr($nroCartao,0,1);
    return $primeiroNum ==4 || $primeiroNum ==5 || $primeiroNum ==6;
}

function validadorData($data){
    $dataAtual = date("Y-m");
    return $data >= $dataAtual;
}

//Y pega o ano todo = 2019 y pega 19

function validadorCvv($CVV){
    return strlen ($CVV) == 3;
}

function validadorCompra($nomeCompleto,$CPF,$nroCartao,$validade,$CVV){
   global $erros;
   
   if(!validadorNome($nomeCompleto)){
       array_push($erros,"Preencha seu nome");
   }

   if(!validadorCpf($CPF)){
    array_push($erros,"11 numeros animal");
   }

   if(!validadorNroCartao($nroCartao)){
    array_push($erros,"comeca com 4 5 ou 6");
   }
    
   if(!validadorData($validade)){
    array_push($erros,"esta vencido");
   }

   if(!validadorCVV($CVV)){
    array_push($erros,"3 caracteres");
   }

}

validadorCompra($nomeCompleto,$CPF,$nroCartao,$validade,$CVV);

//substr pega um caractere a partir de um momento... igual a função do excel ext.texto...pega parte


// var_dump(validadorNome($nome));
// exit;

// var_dump(validadorCpf($CPF));
// exit;

// var_dump(validadorNroCartao($nroCartao));
// exit;

// var_dump(validadorData($validade));
// exit;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
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



</body>

</html>