<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveContactController extends Controller
{
    public function save_contact(){
        session_start();
        include('init.php');

        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_STRING);
        $idContact = filter_var($_POST['idContact'], FILTER_SANITIZE_STRING);
        $tipo_contact = $_POST['tipo_contact'];
        $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

        $update_contact = mysqli_query($conn, "UPDATE `contato` SET `tipo`='$tipo_contact',`descricao`='$description' WHERE `id`='$idContact'");
        if($update_contact == true){
            $_SESSION['update_success'] = "";
            redirect()->to('/search-contact')->send();
        }
        else{
            $_SESSION['insert_failed'] = "";
            redirect()->to('/search-contact')->send();
        }
    }
}
