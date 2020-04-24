<?php
<<<<<<< HEAD
    session_start();
    $nomeLogado = $_SESSION["nome"];
    $emailLogado = $_SESSION["email"];
    $nivelAcesso = $_SESSION["nivelAcesso"];
    // verificando se a sessão logado está definida
    if (!isset($_SESSION["logado"])) {
        // redirecionando o usuário para o login
        header("Location: login.php");
    }
=======
session_start();
$nomeLogado = $_SESSION["nome"];
$emailLogado = $_SESSION["email"];
$nivelAcesso =$_SESSION ["nivelAcesso"];
// isset verifica se a variavel esta definida
if(!isset($_SESSION["logado"])){
    header("Location:login.php");
}


>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
?>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <span>Cursos</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<<<<<<< HEAD
                <?php if ($nivelAcesso == 1) : ?>
=======
                <?php if ($nivelAcesso==1) : ?>
>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Ações <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="adicionarProduto.php">Adicionar Produto</a></li>
                            <li><a href="editarProduto.php">Editar Produto</a></li>
                        </ul>
                    </li>
                </ul>
                <?php endif; ?>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pesquise Aqui">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"
                            aria-hidden="true"></span></button>
                </form>
                <p class="navbar-text navbar-right">
                    Logado como
                    <strong>
<<<<<<< HEAD
                        <a href="usuario.php" class="navbar-link"><?php echo $nomeLogado; ?></a>
=======
                        <a href="usuarios.php" class="navbar-link"> <?php echo $nomeLogado ;?> </a>
>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
                    </strong>
                    <a href="inc/logout.php" class="btn btn-danger">Logout</a>
                </p>
            </div>
        </div>
    </nav>
</header>