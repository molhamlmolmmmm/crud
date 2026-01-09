<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newses',[NewsController::class,"index"])->name('news.index');
Route::get('/newses/create',[NewsController::class,"create"])->name('news.create');
Route::post('/newses/store',[NewsController::class,"store"])->name("news.store");
Route::delete('/newses/{id}',[NewsController::class,"destroy"])->name("news.destroy");
Route::get('/newses/show/{id}',[NewsController::class,'show'])->name('news.show');
Route::get('/newses/edit/{id}',[NewsController::class,'edit'])->name('news.edit');
Route::put('/newses/{id}',[NewsController::class,'update'])->name('news.update');
