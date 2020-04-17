<?php
require "req/database.php";
require "req/funcoesProduto.php";
include "inc/head.php";
include "inc/header.php";

// select dinamico de professores
try{ 
    global $conexao;
    
    $query = $conexao->query('SELECT * FROM usuarios WHERE tipo_usuario_fk=2;');

    $professores = $query->fetchAll (PDO::FETCH_ASSOC);

} catch (PDOException $Exception){
    echo $Exception-> getMessage();
}

if($_POST){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $tag = $_POST['tag'];
    $professor = $_POST['professor'];
    $caminhoCompleto ='';
   

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
        $pastaDesejada="assets\img\produtos\\";
        //selecionando o caminho completo para ser utilizado na função move_upload_file
        $caminhoCompleto = $pastaRaiz . "/" . $pastaDesejada . $tag.".png"; 
        // movendo o arquivo com a função move_uploaded_file
        move_uploaded_file($nomeTemp,$caminhoCompleto);
    
        }

    } $produto =[
        "nome" => $nome,
        "descricao" => $descricao,
        "preco" => $preco,
        "tag" => $tag,
        "professor" => $professor,
        "imagem" => $pastaDesejada . $tag .".png"
    ];
// adiciona no banco de dados
    $adicionou = adicionarProduto($produto);
}

?>

<div class="page-center">
    <h2>Adicionar Produto</h2>
    <!-- mostra a mensagem de erro caso a variavel $erro esteja definida -->
    <?php if (isset($adicionou)&& $adicionou):?>
    <div class="alert alert-success">
        <span>produto adicionado com sucesso</span>
    </div>

    <?php endif; ?>

    <form action="adicionarProduto.php" method="post" class="col-md-7" enctype="multipart/form-data">


        <div class="col-md-12">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome">
        </div>

        <div class="col-md-12">
            <label for="inputNome">Descrição</label>
            <textarea name="descricao" id="descricao" style="resize: none" class="form-control"></textarea>
        </div>


        <div class="col-md-12">
            <label for="nome">Preço</label>
            <input type="number" name="preco" class="form-control" id="preco">
        </div>

        <div class="col-md-12">
            <label for="tag">Tag</label>
            <input type="text" name="tag" class="form-control" id="tag">
        </div>


        <div class="col-md-12">
            <label for="professor">Professor</label>
            <select name="professor" id="professor" class="form-control">
                <option disable select>Selecione um professor</option>
                <?php
                // isset se a variavel foi setado no banco
                    if(isset($professores)){
                        foreach ($professores as $professor) {
                            echo "<option value='".professor['id_usuario']."'>".$professor ['nome'] ."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="col-md-12">
            <br>
            <label for="inputArquivo" class="btn btn-info">Upload foto do produto</label>
            <input type="file" name="arquivo" class="hidden" id="inputArquivo">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>




    </form>


</div>


<?php 
include "inc/footer.php";
?>