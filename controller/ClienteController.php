<?php
require_once 'model/Cliente.php';
/**
 * Created by PhpStorm.
 * User: 11700190
 * Date: 30/08/2019
 * Time: 16:19
 */

class ClienteController
{

    public function all(){

        $obj = new Cliente();
        $clientes = $obj->all();
        include "view/Cliente_all.php";
        
    }

    public function read(){

        $cliente = new Cliente($_GET['id']);
        $cliente->read();
        include 'view/Cliente_read.php';

    }


    public function update(){

        $cliente = new Cliente($_GET['id']);

        if ( isset($_POST['nome']) && isset($_POST["telefone"]) && isset($_POST["email"]) && isset($_POST["cpf"])  ) {

            $cliente->setNome($_POST['nome']);
            $cliente->setTelefone($_POST['telefone']);
            $cliente->setCpf($_POST['cpf']);
            $cliente->setEmail($_POST['email']);
            $cliente->save();

            header("Location: ./?classe=Cliente&acao=all");

        }

        $cliente->update();
        include 'view/Cliente_update.php';

    }



    public function delete(){

        $cliente = new Cliente($_GET['id']);
        $cliente->delete();
        header("Location: ./?classe=Cliente&acao=all");

    }

    
    public function create(){

        if(isset($_POST['nome'])){
            $cliente = new Cliente;
            $cliente->create($_POST['nome'],$_POST['telefone'],$_POST['cpf'], $_POST['email']);
            header("Location: ./?classe=Cliente&acao=all");
        }

        include 'view/Cliente_create.php';


    }





}