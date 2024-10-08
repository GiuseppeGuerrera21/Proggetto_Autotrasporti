<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/areeServite', [PublicController::class, 'serviceArea'])->name('service');
Route::get('/chiSiamo', [PublicController::class, 'index'])->name('index');
Route::get('/preventivo', [PublicController::class, 'prev'])->name('contact');
Route::post('/preventivoInviato', [PublicController::class, 'contactSend'])->name('contact.send');
