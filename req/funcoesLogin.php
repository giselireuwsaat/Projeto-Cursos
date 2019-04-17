<?php
//pegando o nome do arquivo - definir nome do arquivo
    $nomeArquivo ="usuarios.json";

    function cadastrarUsuario($usuario){
//trazer o usuario para dentro do arquivo
//pegando a variavel para dentro da função
        global $nomeArquivo;
//fileget content está pegando o conteudo do arquivo  usuarios.json
        $usuariojson = file_get_contents($nomeArquivo);
        //transformar o json em array associativo para pode manipular o arquvivo
// transformar o json em uma array
        $arrayUsuarios = json_decode ($usuariojson,true);
 //colocar alguma coisa dentro array   
 //array push adicionando um novo usuario na array 
    array_push($arrayUsuarios["usuarios"],$usuario);
    //array retornar json
    //depois que eu inseri o usuario eu preciso transformar em array em json novamente
    $usuariojson = json_encode($arrayUsuarios);
    //colocar um json (conteudo) dentro de um arquivo = retorna true ou false
    $cadastrou = file_put_contents($nomeArquivo,$usuariojson);
//aqui retorna a resposta true e false
    return $cadastrou;
    }

function logarUsuario($email,$senha){
    global $nomeArquivo;
$logado=false;
    //pegando o conteudo do arquivo usuarios.json
    $usuariojson = file_get_contents ($nomeArquivo);
// transformando o json em array associativo
    $arrayUsuarios = json_decode($usuariojson,true);
    //verificando se o usuario existe no arquivo usuarios.json
    //foreach percorre apenas no que dentro de usuarios
    foreach($arrayUsuarios["usuarios"] as $chave =>$valor){
//verifica se o email digitado é igual ao email do json 
//verifica se a senha digitado é igual a senha do json 

        if ($valor["email"]==$email && password_verify($senha,$valor["senha"])){
        $logado =true;
        break;
    }
}
return $logado;
}


    

?>