<?php
    include "inc/head.php";
    include "inc/header.php";
    include "req/database.php";

<<<<<<< HEAD
    try {
        $query = $conexao->query('SELECT * FROM cursos'); //consulta banco de dados
=======
include "inc/head.php";
include "inc/header.php";
include "req/database.php";


try {
   

    $query = $conexao->query('SELECT * FROM cursos'); // consulta banco de dados

    // $query = $conexao->query('SELECT * FROM cursos WHERE nome = "GND"'); // consulta banco de dados, porém um dado especifico

    $cursos = $query->fetchAll(PDO::FETCH_ASSOC); //traz todas as linhas em array associativo
    
    // var_dump($cursos);

    $conexao = null;

} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}

// $nomeCurso1 = "Full Stack";
// $descricaoCurso1 = "Curso de desenvolvimento web";
// $valorCurso1 = 1000.99;
// $imagemCurso1 = "full.jpeg";

// $nomeCurso2 = "Marketing";
// $descricaoCurso2 = "Curso de Marketing";
// $valorCurso2 = 1000.98;
// $imagemCurso2 = "marketing.jpg";

// isso é array dentro de um array

// $cursos = [
// "Full Stack" =>["Curso de desenvolvimento web", 1000.99, "full.jpeg","fullstack"],
// "Marketing Digital" => ["Curso de Marketing",1000.98, "marketing.jpg","marketing"],
// "UX" => ["Curso de user experience", 9000.98, "ux.jpg","ux"],
// "Mobile Android" => ["Curso de apps", 1000.98, "android.png", "android"],
// ];

>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a

        $cursos = $query->fetchAll(PDO::FETCH_ASSOC); // traz todas as linhas em array associativo
        
        $conexao = null;
    } catch ( PDOException $Exception ) {
        echo $Exception->getMessage();
    }

?>

   

    <div class="container">
        <div class="row">
<<<<<<< HEAD
            <?php foreach ($cursos as $key => $infosCurso) : ?>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                    <!-- imagem curso -->
                    <img src="assets/img/<?php echo $infosCurso['image']; ?>" alt="Foto curso <?php echo $infosCurso['nome']; ?>">
                    <div class="caption">
                        <h3><?php echo $infosCurso['nome']; ?></h3>
                        <!-- descrição curso -->
                        <p><?php echo $infosCurso['descricao']; ?></p>
                        <!-- valor curso -->
                        <p>R$<?php echo $infosCurso['preco']; ?></p>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $infosCurso['tag']; ?>" role="button">Comprar</a>
                    </div>
=======
<!-- foreach serve para criar os cursos -->
            <?php foreach ($cursos as $key => $infosCurso) : ?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src= "<?php echo $infosCurso['image'];?>"
                        alt="Foto Curso <?php  echo   $infosCurso['nome'];?>">
                    <div class="caption">
                        <h3><?php  echo $infosCurso['nome'];?></h3>
                        <!-- descrição curso -->
                        <p><?php  echo $infosCurso['descricao'];?></p>
                        <!-- descricao curso -->
                        <p><?php  echo $infosCurso['preco'];?></p>
                        <!-- valor curso -->
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $infosCurso['tag'];?>" role="button">Comprar</a>
>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach ($cursos as $key => $infosCurso) : ?>
<<<<<<< HEAD
                <div class="modal fade" id="<?php echo $infosCurso['tag']; ?>" role="dialog">
                    <div class="modal-dialog">
                    
=======
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $infosCurso['tag'];?>" role="dialog">
                <div class="modal-dialog">

>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Preencha o seus dados</h4>
                        </div>
                        <div class="modal-body">
<<<<<<< HEAD
                            <h4> Curso de: <?php echo $infosCurso['nome']; ?> </h4>
                            <h4> Preço: R$ <?php echo $infosCurso['preco']; ?> </h4>
                            <form action="validarCompra.php" method="post">
                                <input type="hidden" name="nomeCurso" value="<?php echo $infosCurso['nome']; ?>">
                                <input type="hidden" name="precoCurso" value="<?php echo $infosCurso['preco']; ?>">
                                <div class="input-group col-md-5">
                                    <label for="nomeCompleto">Nome Completo</label>
                                    <input id="nomeCompleto" name="nomeCompleto" type="text" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" name="cpf" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="nroCartao">Número do Cartão</label>
                                    <input id="nroCartao" name="nroCartao" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="validade">Validade</label>
                                    <input id="validade" name="validade" type="month" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cvv">CVV</label>
                                    <input id="cvv" name="cvv" type="number" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Comprar</button>
=======
                         <h4>Curso de:<?php echo $infosCurso['descricao']; ?></h4>
                         <h4>Preço: R$ <?php echo $infosCurso['preco']; ?></h4>
                            <form action="validarCompra.php" method="post">
                            <input type="hidden" name="nomeCurso" value="<?php echo $infosCurso['nome'];?>">
                            <input type="hidden" name="precoCurso"value="<?php echo $infosCurso['preco'];?>">
                            <div class="input-group col-md-5">
                            <label for="nomeCompleto">nome completo </label>
                            <input id="nomeCompleto" name="nomeCompleto" type="text" class= "form-control">
                            </div>

                            <div class="input-group col-md-5">
                            <label for="CPF">CPF </label>
                            <input id="CPF" name="CPF" type="number"  class= "form-control">
                            </div>

                            <div class="input-group col-md-5">
                            <label for="nroCartao">Numero Cartao </label>
                            <input id="nroCartao" name="nroCartao" type="text" class= "form-control">
                            </div>

                            <div class="input-group col-md-5">
                            <label for="validade">validade </label>
                            <input id="validade" name="validade" type="month" class= "form-control">
                            </div>

                            <div class="input-group col-md-5">
                            <label for="CVV">CVV </label>
                            <input id="CVV" name="CVV" type="number" class= "form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Comprar</button>

>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php include "inc/footer.php"; ?>