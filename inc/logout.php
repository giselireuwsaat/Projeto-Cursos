<?php
session_start();
session_destroy();
// redirecio para o login
header ("Location:../login.php");
?>