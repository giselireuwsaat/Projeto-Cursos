<?php
    include "inc/head.php";
    include "inc/header.php";
// verificando se o arquivo foi enviado
    if($_FILES){
        //verificando se não teve erro de upload
        if($_FILES ["arquivo"]["error"]==UPLOAD_ERR_OK) {
        //pegando o nome real do arquivo
        $nomearquivo = $_FILES["arquivo"]["name"];
        //pegando o nome temporario do arquivo
        $nomeTemp = $_FILES["arquivo"]["tmp_name"];
        //pegando o caminho ate a pasta raiz
        $pastaRaiz = dirname(__FILE__);
        // selecionando para qual o arquivo sera enviado
        $pastaDesejada="\assets\img\\";
        //selecionando o caminho completo para ser utilizado na função move_upload_file
        $caminhoCompleto = $pastaRaiz . $pastaDesejada . "avatar.jpg"; 
        // movendo o arquivo com a função move_uploaded_file
        move_uploaded_file($nomeTemp,$caminhoCompleto);
        
    }

    }

?>


<div class="page-center">
    <div class="col-md-3">
        <!-- faz o quadradinho -->
        <div class="thumbnail">
            <img src="assets/img/avatar.jpg" alt="Foto de perfil">
            <!-- coloca um texto embaixo da foto -->
            <div class="caption">
                <h2><?php echo $nomeLogado?></h2>
                <p><?php echo $emailLogado?>3
                </p>
                <!-- enctype colocar que o formulario vai receber arquivo  -->
                <form action="usuarios.php" method="post" enctype="multipart/form-data">
                    <label for="inputArquivo" class="btn btn-info">Escolha a sua foto</label>
                    <input type="file" name="arquivo" class="hidden" id="inputArquivo">
                    <button type="submit" class="btn btn-primary">Enviar</button>



                </form>

            </div>

        </div>

    </div>

</div>