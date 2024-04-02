<?php

use App\Http\Controllers\BotManController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

//Welcome
Route::get('/', [welcomeController::class, 'index'])->name('welcome.index');
Route::get('/ponente/{ponente}', [welcomeController::class, 'showPonente'])->name('welcome.show-ponente');
Route::get('/inscripciones', [welcomeController::class, 'inscripciones'])->name('welcome.inscripciones');
Route::post('/inscripciones', [welcomeController::class, 'saveInscripciones'])->name('welcome.save-inscripciones');

//BotMan
Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
