<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'homepage']);
Route::get('/our-team',[MainController::class, 'ourTeam']);
Route::post('/our-team',[GetMemberKSM::class, 'getMemberBy']);
// Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);