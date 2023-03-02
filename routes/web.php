<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('persona/crear',[PersonaController::class,"create"]);#Otra forma de hacer

Route::get('/persona', function(){
    return view("persona.index");
});



Route::get('/form', function(){
    return view("persona.form");
});

*/
Route::resource('persona', PersonaController::class);
