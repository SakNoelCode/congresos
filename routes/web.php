<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ponente', function () {
    return view('ponente');
});

Route::get('/inscripciones', function () {
    return view('inscripciones');
});

Route::get('/inscripciones-finalizado', function () {
    return view('registroFinalizado');
});
