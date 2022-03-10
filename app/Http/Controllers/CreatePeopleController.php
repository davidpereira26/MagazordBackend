<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePeopleController extends Controller
{
    public function create_people(){
        session_start();
        include('init.php');

        $nome = $_POST['name'];
        $cpf = $_POST['cpf'];

        $create_people = mysqli_query($conn, "INSERT INTO `pessoa`(`nome`, `cpf`) VALUES ('$nome','$cpf')");
        if($create_people == true){
            $_SESSION['create_people'] = "";
            redirect()->to('/search-people')->send();
        }
    }
}
