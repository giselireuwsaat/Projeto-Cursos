<<<<<<< HEAD
<?php 

    function cadastrarUsuario($usuario) {
        try {
            global $conexao;
            $query = $conexao->prepare("INSERT INTO usuarios (nome, email, senha, tipo_usuario_fk) VALUES (:nome, :email, :senha, 3)"); //adiciona usuario
    
            $query->execute([
                ':nome' => $usuario['nome'],
                ':email' => $usuario['email'],
                ':senha' => $usuario['senha']
            ]);

            $usuario = $query->fetchAll(PDO::FETCH_ASSOC); // traz todas as linhas em array associativo
            
            $conexao = null;
        } catch ( PDOException $Exception ) {
            echo $Exception->getMessage();
        }

        return true;
    }
=======
<?php

    
    function cadastrarUsuario($usuario){

        try {
            
            global $conexao;
            $query = $conexao->prepare("INSERT INTO usuarios (nome, email,senha,tipo_usuario_fk) VALUES (:nome, :email, :senha, 3)"); // consulta banco de dados
            
            // $query = $conexao->query('SELECT * FROM cursos WHERE nome = "GND"'); // consulta banco de dados, porém um dado especifico
            
            $query->execute([
                ':nome'=>$usuario['nome'],
                ':email'=>$usuario['email'],
                ':senha'=>$usuario['senha']
                ]); 
                
                $cursos = $query->fetchAll(PDO::FETCH_ASSOC); //traz todas as linhas em array associativo
                
                // var_dump($cursos);
                
                $conexao = null;
                
            } catch (PDOException $Exception) {
                echo $Exception->getMessage();
            }
            
            return true;
        }
        
        
        function logarUsuario($email,$senha){
            $infoLogado=false;
   try {
       global $conexao;
       $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
       $query->execute([
           ':email'=>$email
       ]);

       $usuario = $query->fetch((PDO::FETCH_ASSOC));

       if($usuario['email']==$email && password_verify($senha,$usuario['senha'])){
     $infoLogado = [
        "nomeUsuario" =>$usuario['nome'],
        "tipoUsuario" =>$usuario['tipo_usuario_fk']
];
    var_dump($infoLogado);
}

   
    }catch (PDOException $Exception) {
    echo $Exception->getMessage();
}

return $infoLogado;
}
>>>>>>> 50f68a5f366d4579e4be51ce09f2bccae764306a

    function logarUsuario($email, $senha) {
        try {
            global $conexao;

            $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
            $query->execute([
                ':email' => $email
            ]);

            $usuario = $query->fetch(PDO::FETCH_ASSOC);

            if($usuario['email'] == $email && password_verify($senha, $usuario["senha"])) {
                $infoLogado = [
                    "nomeUsuario" => $usuario['nome'],
                    "tipoUsuario" => $usuario['tipo_usuario_fk']
                ];

                var_dump($infoLogado);
            }

        } catch ( PDOException $Exception ) {
            echo $Exception->getMessage();
        }

        return $infoLogado;
    }
?>