<?php 
$dsn = 'mysql:host=localhost;dbname=projeto_cursos;charset=utf8mb4;port:3306';
// localhost é o local //db name nome do banco de dados
$db_user = 'root';
$db_pass = '';
$conexao = new PDO ($dsn, $db_user, $db_pass); //abre concexao



// $conexao = new PDO($dsn, $db_user, $db_pass);

// var_dump($conexao);

// $conexao->query('SELECT * FROM usuarios');

?>