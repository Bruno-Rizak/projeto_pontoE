<?php
require_once ("../infra/Database.php");

class Usuario
{
    private $login;
    private $senha;
    private $nome;
    private $sobrenome;
    private $email;

    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        }
    }

    public function __get($atributo)
    {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }

    public function salvar(){
        $db = new Database();
        $con = $db->connect();

        $sql = "INSERT INTO usuario(nome, sobrenome, email, login, senha) 
                VALUES (:nome, :sobrenome, :email, :login, :senha)";
        
        $st = $con->prepare($sql);
        $st->bindParam(':nome', $this->nome);
        $st->bindParam(':sobrenome', $this->sobrenome);
        $st->bindParam(':email', $this->email);
        $st->bindParam(':login', $this->login);
        $st->bindParam(':senha', $this->senha);
	    $status = $st->execute();

        $idUsuario = $con->lastInsertId();

        if ($status == true){
            return true;
        }

    }

    public function __construct()
    {
    }

    public function autenticar($login, $senha)
    {
        $database = new Database();
        $con = $database->connect();

        $sql = "SELECT id, login FROM usuario WHERE login = :login AND senha = :senha";

        $st = $con->prepare($sql);
        $st->bindParam(':login', $login);
        $st->bindParam(':senha', $senha);
        $retorno = $st->execute();
        $dados = $st->fetchAll();

        if (sizeof($dados) == 1){
            return true;
        }
        else{
            return false;
        }
    }
}