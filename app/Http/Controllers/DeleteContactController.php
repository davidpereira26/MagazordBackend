<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteContactController extends Controller
{
    public function delete_contact($id){
        session_start();
        include('init.php');
        $delete = mysqli_query($conn, "DELETE FROM `contato` WHERE `id`='$id'");
        if($delete == true){
            $_SESSION['delete_success'] = "";
            redirect()->to('search-contact')->send();
        }
    }
}
