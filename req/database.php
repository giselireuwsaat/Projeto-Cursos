<<<<<<< HEAD
<?php
	$dsn = 'mysql:host=us-cdbr-iron-east-01.cleardb.net;port:3306';
	$db_user = 'b814049c84b5dd';
	$db_pass = '4edc2dd3';
	$conexao = new PDO($dsn, $db_user, $db_pass); // abre conexão
	

	// var_dump($conexao);

	//$conexao->query('SELECT * FROM usuarios');
    
=======
<?php 
$dsn = 'mysql:host=localhost;dbname=projeto_cursos;charset=utf8mb4;port:3306';
// localhost é o local //db name nome do banco de dados
$db_user = 'root';
$db_pass = '';
$conexao = new PDO ($dsn, $db_user, $db_pass); //abre concexao



// $conexao = new PDO($dsn, $db_user, $db_pass);

// var_dump($conexao);

// $conexao->query('SELECT * FROM usuarios');

>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a
?>