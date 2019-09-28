<?php
/**
 * Created by PhpStorm.
 * User: 11700190
 * Date: 30/08/2019
 * Time: 16:28
 */
Class Cliente
{
    private $id;
    private $nome;
    private $telefone;
    private $cpf;
    private $email;

    private $con;

    /**
     * @return PDO
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * @param PDO $con
     */
    public function setCon($con)
    {
        $this->con = $con;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function __construct($ID=NULL, $Nome=NULL, $Telefone=NULL, $CPF=NULL,  $Email=NULL)
    {
        $this->id = $ID;
        $this->nome = $Nome;
        $this->telefone = $Telefone;
        $this->cpf = $CPF;
        $this->email = $Email;


        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }


    public function all(){

        $sql= $this->con->prepare("SELECT * FROM cliente ORDER BY nome");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }


    public function read(){

        $sql = $this->con->prepare("SELECT * FROM cliente WHERE id=?");
        $sql->execute( array($this->id) );
        $cliente = $sql->fetchObject();

        if ( $cliente ){
            $this->id = $cliente->ID; 
            $this->nome = $cliente->Nome;
            $this->telefone = $cliente->Telefone;
            $this->cpf = $cliente->CPF;
            $this->email = $cliente->Email;
        }


    }

    function update(){


        $sql = $this->con->prepare("SELECT * FROM cliente WHERE id=?");
        $sql->execute( array($this->id) );
        $cliente = $sql->fetchObject();

        if ( $cliente ){
            $this->id = $cliente->ID;
            $this->nome = $cliente->Nome;
            $this->telefone = $cliente->Telefone;
            $this->cpf = $cliente->CPF;
            $this->email = $cliente->Email;
        }




    }

    public function save(){

        $sql = $this->con->prepare("UPDATE cliente SET nome=?, telefone=?, cpf=?, email=?  WHERE id=?");
        $sql->execute( array($this->nome, $this->telefone, $this->cpf, $this->email, $this->id) );


    }

    public function delete(){


        $sql = $this->con->prepare("DELETE  FROM cliente WHERE id=?");
        $sql->execute( array($this->id) );


    }

    public function  create($nome, $telefone, $cpf, $email){

        $sql = $this->con->prepare("INSERT INTO cliente VALUES(null, ?, ?, ?, ?)");
        $sql->execute( array($nome, $telefone, $cpf, $email ) );

    }

}