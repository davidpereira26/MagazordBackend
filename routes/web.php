<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterContactController;
use App\Http\Controllers\SolicitationEditController;
use App\Http\Controllers\SaveContactController;
use App\Http\Controllers\DeleteContactController;
use App\Http\Controllers\DeletePeopleController;
use App\Http\Controllers\EditPeopleSolicitationController;
use App\Http\Controllers\EditPeopleController;
use App\Http\Controllers\CreatePeopleController;


Route::get('/', function () {
    return view('home');
});

Route::get('/search-people', function(){
    return view('search-people');
});

Route::get('/search-contact', function(){
    return view('search-contact');
});

Route::post('/register-contact', [RegisterContactController::class, 'register_contact']);

Route::get('/edit/{id}', [SolicitationEditController::class, 'solicitation_edit']);

Route::post('/edit-save', [SaveContactController::class, 'save_contact']);

Route::get('/delete/{id}', [DeleteContactController::class, 'delete_contact']);

Route::get('/edit-people/{id}', [EditPeopleSolicitationController::class, 'edit_people']);

Route::get('/delete-people/{id}', [DeletePeopleController::class, 'delete_people']);

Route::post('/edit-people-save', [EditPeopleController::class, 'edit_people']);

Route::post('/register-people', [CreatePeopleController::class, 'create_people']);