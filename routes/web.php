<?php

use App\Http\Controllers\FrontEndController;

use Illuminate\Support\Facades\Route;












Route::get('/',[App\Http\Controllers\FrontEndController::class,'index']);

Route::get('/about',[App\Http\Controllers\FrontEndController::class,'about']);

Route::get('/Contact',[App\Http\Controllers\FrontEndController::class,'Contact']);
//Route::get('/about',[App\Http\Controllers\FrontEndController::class,'about']);