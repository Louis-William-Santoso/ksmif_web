<?php

namespace App\Http\Controllers;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;

//Route page
Route::get('/',[MainController::class, 'homepage']);
Route::get('/our-team',[MainController::class, 'getMember']);
Route::get('/our-team/by',[MainController::class, 'getMemberBy']);
Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);
Route::get('/bursa-soal/by', [MainController::class, 'bursaSoalBy']);

//User Login/signin
Route::post('/user-login', [UserLog::class, 'userLogin']);

//dashboad
Route::get('/dashboard', [UserLog::class, 'dashboard'])->middleware('checkMember');