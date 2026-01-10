<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Test1Controller;
use App\Http\Middleware\CustomMiddelware;
use App\Http\Middleware\Md;
use App\Models\test1;
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
})->name('welcome');

Route::get('/newses',[NewsController::class,"index"])->name('news.index');
Route::get('/newses/create',[NewsController::class,"create"])->name('news.create');
Route::post('/newses/store',[NewsController::class,"store"])->name("news.store");
Route::delete('/newses/{id}',[NewsController::class,"destroy"])->name("news.destroy");
Route::get('/newses/show/{id}',[NewsController::class,'show'])->name('news.show');
Route::get('/newses/edit/{id}',[NewsController::class,'edit'])->name('news.edit');
Route::put('/newses/{id}',[NewsController::class,'update'])->name('news.update');

Route::get('/formView',function(){
    return view('formcreate');
});
// Route::post('/createform',[Test1Controller::class,'store'])->name('createform');
Route::get('/hi',function(){
    return view('hi');
})->name('hi');
Route::middleware('checkLen')->post('/createform',[Test1Controller::class,'store'])->name('createform');
