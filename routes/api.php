<?php

use App\Http\Controllers\Api\AuthController as ApiAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post',[PostController::class,"index"]);
Route::get('/post/show/{id}',[PostController::class,'show']);
Route::delete('/post/delete/{id}',[PostController::class,'destroy']);
Route::post('/post/store',[PostController::class,'store']);
Route::put('/post/update/{id}',[PostController::class,'update']);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout',[AuthController::class,'logout']);
});

// Route::middleware(['auth:sanctum'])->Route::post('/logout',[AuthController::class],'logout');
