<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterContactController extends Controller
{
    public function register_contact(){
        error_reporting(0);
        session_start();
        include ('init.php');
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_STRING);
        $tipo_contact = filter_var($_POST['tipo_contact'], FILTER_SANITIZE_STRING);
        $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

        $search_people = mysqli_query($conn, "SELECT * FROM `pessoa` WHERE `cpf`='$cpf'");
        $people_assoc = mysqli_fetch_assoc($search_people);
        $id_people = $people_assoc['id'];

        if($search_people->num_rows == 0){
            $insert_people = mysqli_query($conn, "INSERT INTO `pessoa`(`nome`, `cpf`) VALUES ('$name','$cpf')");
            if($insert_people == true){
                $search_people_contact = mysqli_query($conn, "SELECT * FROM `pessoa` WHERE `cpf`='$cpf'");
                $people_assoc_contact = mysqli_fetch_assoc($search_people_contact);
                $id_people_contact = $people_assoc_contact['id'];

                $insert_contact = mysqli_query($conn, "INSERT INTO `contato`(`tipo`, `descricao`, `idPessoa`) VALUES ('$tipo_contact','$description','$id_people_contact')");
                if($insert_contact == true){
                    $_SESSION['insert_success'] = "";
                    redirect()->to('/search-contact')->send();
                }
                else{
                    $_SESSION['insert_failed'] = "";
                    redirect()->to('/search-contact')->send();
                }
            }
        }
        else{
            $insert_contact = mysqli_query($conn, "INSERT INTO `contato`(`tipo`, `descricao`, `idPessoa`) VALUES ('$tipo_contact','$description','$id_people')");
            if($insert_contact == true){
                $_SESSION['insert_success'] = "";
                redirect()->to('/search-contact')->send();
            }
            else{
                $_SESSION['insert_failed'] = "";
                redirect()->to('/search-contact')->send();
            }
        } 
    }
}