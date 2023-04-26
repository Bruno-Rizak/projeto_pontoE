<?php
require_once("Database.php");
class
Empregado
{
    private $id;
    private $noMatricula;
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $dataContratacao;

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


    public function __construct()
    {
    }

    public function obterTodos()
    {
        $db = new Database();
        $con = $db->connect();

        $sql = "SELECT * FROM empregado limit 100";
        $rs = $con->query($sql);

        $status = $rs->execute();
        $dados = $rs->fetchAll();

        $db->close();
        return $dados;
    }

    public function inserir(){
        $db = new Database();
        $con = $db->connect();

        $sql = "INSERT INTO empregado(no_matricula, nome, sobrenome, data_contratacao, data_nascimento) 
        VALUES ($this->noMatricula, '$this->nome', '$this->sobrenome', '$this->dataContratacao', '$this->dataNascimento')";

        $status = $con->exec($sql);

        $db->close();
    }

    public function atualizar(){
        $db = new Database();
        $con = $db->connect();

        $sql = "UPDATE empregado SET no_matricula = $this->noMatricula, nome = '$this->nome', 
        sobrenome = :sobrenome, data_contratacao = '$this->dataContratacao', 
        data_nascimento = '$this->dataNascimento' WHERE id = $this->id";

        $status = $con->exec($sql);

        $db->close();
    }
}