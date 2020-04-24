<?php
	$dsn = 'mysql:host=https://git.heroku.com/projeto-cursos.git;dbname=us-cdbr-iron-east-01.cleardb.net;charset=utf8mb4;port:3306';
	$db_user = 'b814049c84b5dd';
	$db_pass = '4edc2dd3';
	$conexao = new PDO($dsn, $db_user, $db_pass); // abre conexão
	

	// var_dump($conexao);

	//$conexao->query('SELECT * FROM usuarios');
    
?>