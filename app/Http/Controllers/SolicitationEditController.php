<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitationEditController extends Controller
{
    public function solicitation_edit($id){
        session_start();
        include('init.php');
        $_SESSION['edit'] = $id;
        redirect()->to('/search-contact')->send();
    }
}
