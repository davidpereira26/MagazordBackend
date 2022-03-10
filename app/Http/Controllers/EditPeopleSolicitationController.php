<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditPeopleSolicitationController extends Controller
{
    public function edit_people($id){
        session_start();
        include('init.php');
        $_SESSION['edit_people'] = $id;
        redirect()->to('/search-people')->send();
    }
}
