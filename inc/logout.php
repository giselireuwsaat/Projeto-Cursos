<?php
<<<<<<< HEAD
    // iniciando a sessão do usuário
    session_start();
    // destruindo a sessão do usuário
    session_destroy();
    // redirecionando o usuário para o login.php
    header("Location: ../login.php");
=======
session_start();
session_destroy();
// redirecio para o login
header ("Location:../login.php");
>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
?>