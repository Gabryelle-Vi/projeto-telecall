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
    <title>Área do administrador</title>
    
    <style>
        body{
           
            color: white;
            background-image: url("fundo-branco.jpg");
            background-repeat:no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
         #direita{
            width: 80%;
            height: 600px;
            float: left;
        }
        table{
            background-color: rgb(128, 0, 0, 0.9);
            width: 100%;
            margin: 30px auto;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
        }
        tr{
            line-height: 30px;

        }
        tr#titulo{
            font-weight: bold;
            background-color: rgb(0, 0, 0, 0.7);
           
        }
        td{
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid white;
        }
        a{
            background-color: white;
            color: gray;
            padding: 5px;
            margin: 0px 5px;
            text-decoration: none;
            border-radius: 5px;

        }
        a:hover {
            background-color: rgb(200, 200, 200);
        }
       
    </style> 
</head>
<body>
    
<section id="direita">
   
    <table>
        
                <tr id="titulo">
                    <td>Nome</td>
                    <td>Login</td>
                    <td>Senha</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Sexo</td>
                    <td>Nascimento</td>
                    <td>CPF</td>
                    <td>Mãe</td>
                    <td>Endereço</td>
                    <td>Complemento</td>
                    <td>Acesso </td>
                </tr>
    <?php
       $dados = $p->buscarDados();
       if(count($dados) > 0)
       {
        for($i=0; $i < count($dados); $i++)
        {
            echo "<tr>";
            foreach ($dados[$i] as $k => $v)
            {
                if($k != "id")
                {
                    echo "<td>".$v."</td>";

                }

            }
            ?>
    
    <td>
       
        <a href="tab-user.php?id=<?php echo $dados[$i]['id'];?>">Excluir</a>
    </td>
            <?php
            echo "</tr>";

        }
   
       }
       else 
       {
        echo "Ainda não há pessoas cadastradas";
       }
    

?>
           
               
            </table>
        </section>
   
    
</body>
</html>

<?php
  // Excluindo um usuário com base no ID fornecido
    if(isset($_GET['id']))
    {
        $id_pessoa = addslashes($_GET['id']);
        $p->excluirPessoa($id_pessoa);
        header("location: tab-user.php");
    }
?>