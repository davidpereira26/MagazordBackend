<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeletePeopleController extends Controller
{
    public function delete_people($id){
        session_start();
        include('init.php');
        $delete = mysqli_query($conn, "DELETE FROM `pessoa` WHERE `id`='$id'");
        if($delete == true){
            $delete = mysqli_query($conn, "DELETE FROM `contato` WHERE `idPessoa`='$id'");
            if($delete == true){
                $_SESSION['delete_success'] = "";
                redirect()->to('search-people')->send();
            }   
        }
    }
}
