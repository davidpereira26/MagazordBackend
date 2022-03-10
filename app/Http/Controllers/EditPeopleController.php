<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditPeopleController extends Controller
{
    public function edit_people(){
        session_start();
        include('init.php');
        $name = $_POST['name'];
        $cpf = $_POST['cpf'];
        $idPessoa = $_POST['idPessoa'];

        $update_people = mysqli_query($conn, "UPDATE `pessoa` SET `nome`='$name',`cpf`='$cpf' WHERE `id`='$idPessoa'");
        if($update_people == true){
            $_SESSION['update_people'] = "";
            redirect()->to('/search-people')->send();
        }
    }
}
