<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContatoController;



Route::get('/',[LandingPageController::class,'index'])->name('landingpage');
Route::post('/enviar-email', [ContatoController::class, 'enviarEmail'])->name('enviar.email');

