<?php

use App\Http\Controllers\ContactController;
use vendor\laravel\framework\src\Illuminate\Routing;


Route::get('/', [ContactController::class, 'index']);

Route::post('/thanks/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks/confirm', [ContactController::class, 'confirm']);

Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'store']);

Route::get('/register',[ContactController::class,'register']);
Route::post('/register',[ContactController::class,'register']);


Route::post('/register/admin/login',[ContactController::class,'login']);
Route::get('/register/admin/login',[ContactController::class,'login']);

Route::post('/register/admin',[ContactController::class, 'store']);
Route::get('/register/admin',[ContactController::class, 'store']);



