<?php

use App\Http\Controllers\Auth\Api\LoginController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function() {
   Route::post('login',[LoginController::class, 'login']); 

   Route::post('logout',[LoginController::class, 'logout'])->middleware('auth:sanctum'); 
});

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('book',BookController::class);
});

