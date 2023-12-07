<?php

// Autenticando o usuário com base nas credenciais de login
// Redirecionando para páginas diferentes com base no tipo de usuário

require_once 'classe-pessoa.php';

if (isset($_POST['login']) && isset($_POST['senha'])) {
    $p = new Pessoa("crudpdo", "127.0.0.1", "root", ""); // Instancia a classe Pessoa

    $login = addslashes($_POST['login']);
    $senha = addslashes($_POST['senha']);

    // Consulta o banco de dados utilizando o metodo getpdo
    $cmd = $p->getPDO()->prepare("SELECT * FROM pessoa WHERE login = :l AND senha = :s");
    $cmd->bindValue(":l", $login);
    $cmd->bindValue(":s", $senha);
    $cmd->execute();

    // Verifica se encontrou um registro correspondente
    if ($cmd->rowCount() > 0) {
        $user = $cmd->fetch(PDO::FETCH_ASSOC);

          // Obtém o ID do usuário autenticado
          $idUsuario = $user['id'];


        if($user['is_master']){
            //usuario master direcionado para pagina especial
            header("Location: tab-user.php");
        } else {
            //usuario normal, redirecionado para pagina padrao
            header("Location: 2fa.php");
        }
       
    } else {
        echo "Login ou senha incorretos";
    }
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("fundo-branco.jpg");
            background-repeat:no-repeat;
            background-size: cover;
 
        }
        .tela-login{
            background-color: rgb(0, 0, 0, 0.5); 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: red;
            border: none;
            padding: 15px;
            width: 45%;
            border-radius: 10px;
            cursor: pointer;
            float: right;
            color: white;

        }
        .inputSubmit:hover{
            background-color: rgb(238, 26, 26) ;
        }
        #reset{
            background-color: red;
            width: 45%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            float: left;

        }
        #reset:hover{
            background-color: rgb(238, 26, 26) ;
        }
        button{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            background-color: rgb(0, 0, 0, 0.7);
            color: white;
            cursor: pointer;
            border-radius: 10px;
        }
        img{
            margin: auto;
            display: block;
            width: 200px;
        }
        
        

    </style>
</head>
<body>

<a href="index.php"><button>Voltar</button></a>
    <div class="tela-login">
    <img id="logo-img" src="./img/logo-telecall.png" alt="logo">
        <h1>Login</h1>
        <form  method="POST">
          <input type="text" name="login"  placeholder="Login" maxlength="6" >
          <br> <br>
          <input type="password" name="senha" maxlength="8" placeholder="Senha" maxlegnth="8" >
          <br><br>
          <input type="reset" name="reset" value="Limpar" id="reset">
          <input class="inputSubmit" type="submit" name="submit" value="Enviar" >
        </form>
    </div>
    
</body>
</html>
