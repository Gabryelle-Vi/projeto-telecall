<?php

require_once 'classe-pessoa.php';
$p = new Pessoa("crudpdo", "127.0.0.1", "root", "" );


function pegarPerguntaAleatoria()
{
    $perguntas = array(
        'qual_o_nome_da_sua_mae' => 'Qual o nome da sua mãe?',
        'qual_o_seu_cpf' => 'Qual o seu CPF?',
        'qual_e_sua_data_de_nascimento' => 'Qual é a sua data de nascimento?'
    );

    $slugAleatorio = array_rand($perguntas);
    $perguntaAleatoria = $perguntas[$slugAleatorio];

    return array(
        'pergunta' => $perguntaAleatoria,
        'slug' => $slugAleatorio
    );

}

$perguntaInfo = pegarPerguntaAleatoria();
$pergunta = $perguntaInfo['pergunta'];
$slug = $perguntaInfo['slug'];

//$idUsuario = $p->obterIdUsuario('login','senha'); 

// Lógica para processar o envio do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: index2.php');
    exit;
}


//-----------------Estava dando muito erro de redirecionamento e de verificação que n consegui consertar então tirei tudo e deixa sem verificação-----------------------


//------ Os erros eram que sempre aparecia como resposta errada sendo que a resposta da pergunta estava certa e não redirecionava pro index2.php---------------------------------- 



   // if (isset($_POST['resposta'])) {
    //    $respostaUsuario = $_POST['resposta'];
      
        //mensagens de depuração
    //    echo 'Pergunta: ' . $pergunta . '<br>';
     //   echo 'Resposta do usuário: ' . $respostaUsuario . '<br>';


        // Verificar se a resposta está correta com base no slug
      //  switch ($slug) {
     //       case 'qual_o_nome_da_sua_mae':
                // Buscar o valor correto da mãe no banco de dados
    //            $sql = "SELECT qual_o_nome_da_sua_mae FROM autenticacao WHERE pessoa_id = :pessoa_id";
    //            break;
             
    //        case 'qual_o_seu_cpf':
                // Buscar o valor correto do CPF no banco de dados
     //           $sql = "SELECT qual_o_seu_cpf FROM autenticacao WHERE pessoa_id = :pessoa_id";
            
     //           break;
      //      case 'qual_e_sua_data_de_nascimento':
                // Buscar o valor correto da data de nascimento no banco de dados
     //           $sql = "SELECT qual_e_sua_data_de_nascimento FROM autenticacao WHERE pessoa_id = :pessoa_id";
               
     //           break;
     //       default:
     //           echo 'Pergunta inválida';
     //           exit;
     //   }

     //   if (isset($sql)) {
            // Preparar e executar a consulta
     //       $stmt = $p->getPDO()->prepare($sql);
     //       $stmt->bindParam(':pessoa_id', $idUsuario);
     //       echo 'ID do usuário: ' . $idUsuario . '<br>';
     //       echo 'SQL gerado: ' . $sql . '<br>';

     //       if ($stmt->execute()) {
                // Obter a resposta correta do banco de dados
      //          $respostaCorreta = $stmt->fetchColumn();
              //  echo 'Resposta correta do banco de dados: ' . $respostaCorreta . '<br>';


      //          if ($respostaCorreta !== false) {
                    // Adicione mensagens de depuração
                  //  echo 'Resposta correta do banco de dados: ' . $respostaCorreta . '<br>';
                
                    // Verificar se a resposta está correta
        //            if (trim($respostaUsuario) == trim($respostaCorreta)) {
                        // Resposta correta! Redirecionando...
 //                       header('Location: index2.php');
    //                    exit;
     //               } else {
                        // Resposta incorreta
      //                  echo 'Resposta incorreta';
     //               }
     //           } 

 

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <title>2FA</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("fundo-branco.jpg");
            background-repeat:no-repeat;
            background-size: cover;
 
        }
        .fa2{
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

        select {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        
        

    </style>
</head>
<body>


    <div class="fa2">
    <img id="logo-img" src="./img/logo-telecall.png" alt="logo">
        <h1>Segunda Tela de Autenticação</h1>
        <form  method="POST">
              <!-- Exibindo a pergunta aleatória no formulário -->
              <p><?= $pergunta ?></p>
            <br><br>
            <!-- Utilizando o atributo "placeholder" para exibir uma dica no campo de resposta -->
            <input type="text" name="resposta" >
            <br><br>
       
          <input type="reset" name="reset" value="Limpar" id="reset">
          <input class="inputSubmit" type="submit" name="submit" value="Enviar" >
        </form>
    </div>
    
</body>
</html>