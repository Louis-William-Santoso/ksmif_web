<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'homepage']);
Route::get('/our-team',[MainController::class, 'getMember']);
Route::get('/our-team/by',[MainController::class, 'getMemberBy']);
Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);
Route::get('/bursa-soal/by', [MainController::class, 'bursaSoalBy']);