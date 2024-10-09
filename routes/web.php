<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/AreeServite', [PublicController::class, 'serviceArea'])->name('service');
Route::get('/ChiSiamo', [PublicController::class, 'aboutUs'])->name('aboutUs');
Route::get('/Preventivo', [PublicController::class, 'prev'])->name('contact');
Route::post('/PreventivoInviato', [ContactController::class, 'send'])->name('contact.send');
