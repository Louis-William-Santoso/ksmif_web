<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'homepage']);
Route::get('/our-team',[MainController::class, 'ourTeam']);
Route::get('/our-team/by',[MainController::class, 'getMemberBy']);
// Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);