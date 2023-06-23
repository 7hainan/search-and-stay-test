<?php

use App\Http\Controllers\Auth\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function() {
   Route::post('login',[LoginController::class, 'login']); 

   Route::post('logout',[LoginController::class, 'logout']); 
});

Route::get('/',function(){
    return response()->json(['success'=>true], 200);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
