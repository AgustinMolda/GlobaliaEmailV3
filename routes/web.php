<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
Route::get('/', function () {
    return view('welcome');
});


Route::post('enviar-correo', function () {
    // Lógica para enviar el correo electrónico
    Mail::to('agusting.moldavsky@gmail.com')->send(new EnviarCorreo());
    
    return 'Correo enviado';
})->name('enviar-correo');