<?php
require_once 'classe-pessoa.php';
$p = new Pessoa("crudpdo", "127.0.0.1", "root", "" );



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <title>Formulário</title>
    <style>
       
       body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("fundo-branco.jpg");
            background-repeat:no-repeat;
            background-size: cover;
          
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            color: white;
            background-color: rgb(0, 0, 0, 0.5);
            padding: 70px;
            border-radius: 15px;
            width: 20%; 
            
           
        }

    
        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput, 
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: red;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-color: red;
            width: 45%;
            border: none;
            padding: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            float: right;
        }

        #submit:hover {
            background-color: rgb(238, 26, 26);
        }

        #reset {
            background-color: red;
            width: 45%;
            border: none;
            padding: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            float: left;
        }

        #reset:hover {
            background-color: rgb(238, 26, 26);
        }

        button {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            background-color: rgb(0, 0, 0, 0.7);
            color: white;
            cursor: pointer;
            border-radius: 10px;
        }

        img {
            margin: auto;
            display: block;
            width: 200px;
        }

       
       
    </style>
</head>
<body>
    <!-- Bloco PHP para lidar com o envio do formulário -->
    <?php 
    if(isset($_POST['cpf']))
    {
        // Recuperando dados do formulário e armazenando em variáveis
        $nome = addslashes($_POST['nome']);
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $sexo = addslashes($_POST['sexo']);
        $nascimento = addslashes($_POST['nascimento']);
        $cpf = addslashes($_POST['cpf']);
        $mae = addslashes($_POST['mae']);
        $endereco = addslashes($_POST['endereco']);
        $complemento = addslashes($_POST['complemento']);
        $is_master = isset($_POST['is_master']) ? 1 : 0; // Defina a variável $is_master

         // Verificando se todos os campos estão preenchidos
        if (!empty($nome) && !empty($login) && !empty($senha) && !empty($email) && !empty($telefone) && !empty($sexo) && !empty($nascimento) && !empty($cpf) && !empty($mae) && !empty($endereco) && !empty($complemento)){
             // Verificando se o cadastro é bem-sucedido
            if(!$p->cadastrarPessoa($nome, $login, $senha, $email, $telefone, $sexo, $nascimento, $cpf, $mae, $endereco, $complemento, $is_master))
            {
                echo "CPF já cadastrado";

            }else {
                header("Location: login.php");
                exit();
            }
        }
        else 
        {
            echo " Preencha todos os campos";
        }

     }

    ?>

<a href="index.php"><button>Voltar</button></a>
    <div class="box">
    <img id="logo-img" src="./img/logo-telecall.png" alt="logo"><br>
    <h1>Cadastre-se</h1>
        <form action="form.php" method="POST">
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" maxlength="80" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="login" id="login" class="inputUser" maxlength="6" required>
                    <label for="login" class="labelInput">Login</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" maxlength="8" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="12" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                

                <p>Sexo</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="Outro" required>
                <label for="Outro">Outro</label>
                <br><br>

                
                    <label for="data_nascimento">Data de nascimento:</label>
                    <input type="date" name="nascimento" id="data_nascimento"  required>
                
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" " pattern="\d{11}" title="Digite um CPF válido (11 Números)" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="mae" id="mae" class="inputUser" required>
                    <label for="mae" class="labelInput">Nome da sua mãe</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="complemento" id="complemento" class="inputUser" required>
                    <label for="complemento" class="labelInput">Complemento</label>
                </div>
                <br>
                <!-- <div class="inputBox">
                <label for="is_master">Usuário Master?</label>
                <input type="checkbox" name="is_master" value="1"> -->
                <br><br>
                
                <input type="reset" name="reset" value="Limpar" id="reset">
                <a href="login.php"> <input type="submit" name="submit" id="submit"></a>


            
        </form>
    </div>

   
    
</body>


</html>

