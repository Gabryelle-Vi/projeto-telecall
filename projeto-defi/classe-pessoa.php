<?php
 // Definição da classe para lidar com interações no banco de dados
Class Pessoa {

    private $pdo;

    public function __construct($dbname, $host, $user, $senha)
    {
        try
        {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Este método `setAttribute` é usado para definir atributos do objeto PDO. Neste caso, está configurando o modo de erro para exceções (`ERRMODE_EXCEPTION`). Isso significa que o PDO lançará exceções em caso de erros.

        }
        catch (PDOException $e) {
            die( "Erro com banco de dados:".$e->getMessage());

        }
        catch (Exception $e) {
            echo "Erro generico:".$e->getMessage();;

        }
        

    }
    public function getPDO() {
        return $this->pdo;
    }


    
//funcao para buscar dados e colocar naquela tabela
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    //funcao de cadastrar pessoa no bd
    public function cadastrarPessoa( $nome, $login, $senha, $email, $telefone, $sexo, $nascimento, $cpf, $mae, $endereco, $complemento, $is_master)
    {
        
        
        // antes de cadastrar ver se a pessoa ja tem o email cadastrado
        $cmd = $this->pdo->prepare("SELECT id FROM pessoa WHERE cpf = :s");
        $cmd->bindValue(":s",$senha);
        $cmd->execute();
        if($cmd->rowCount() > 0)//cpf ja existe
        {
            return false;
        }else //n foi encontrado o email
        {
            $cmd = $this->pdo->prepare("INSERT INTO pessoa (nome, login, senha, email, telefone, sexo, nascimento, cpf, mae, endereco, complemento , is_master) VALUES (:n, :l, :s, :e, :t, :sx, :nc, :c, :m, :ed, :cm, :im)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":l", $login);
            $cmd->bindValue(":s", $senha);
            $cmd->bindValue(":e", $email);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":sx", $sexo);
            $cmd->bindValue(":nc", $nascimento);
            $cmd->bindValue(":c", $cpf);
            $cmd->bindValue(":m", $mae);
            $cmd->bindValue(":ed", $endereco);
            $cmd->bindValue(":cm", $complemento);
            $cmd->bindValue(":im", $is_master, PDO::PARAM_BOOL);
            $cmd->execute();
            return true;
        }

    }
    public function excluirPessoa($id)
    {
        $cmd = $this->pdo->prepare("DELETE FROM pessoa WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    public function buscarDadosPessoa($id)
    {
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;

    }

   
        
}


?>