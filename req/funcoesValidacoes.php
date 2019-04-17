<?php
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

?>