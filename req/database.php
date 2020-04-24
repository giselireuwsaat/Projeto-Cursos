<?php
	$dsn = 'https://git.heroku.com/projeto-cursos.git';
	$db_user = 'b814049c84b5dd';
	$db_pass = '4edc2dd3';
	$conexao = new PDO($dsn, $db_user, $db_pass); // abre conexão
	

	// var_dump($conexao);

	//$conexao->query('SELECT * FROM usuarios');
    
?>