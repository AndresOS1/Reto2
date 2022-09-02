<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/verRegister',[RegisterController::class,'verRegister'])->name('verRegister');
Route::post('/register',[RegisterController::class,'register'])->name('register');

Route::get('/verLogin',[LoginController::class,'verLogin'])->name('verLogin');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('cerrarsesion');

Route::get('/caso.index',[CasoController::class,'index'])->name('caso.index');
Route::get('/caso.create',[CasoController::class,'create'])->name('caso.create');
Route::post('/caso.store',[CasoController::class,'store'])->name('caso.store');
Route::get('/editarcaso/{id}',[CasoController::class,'edit'])->name('editarcaso');
Route::put('/actualizarcaso/{id}',[CasoController::class,'update'])->name('actualizarcaso');
Route::delete('/eliminarcaso/{id}',[CasoController::class,'destroy'])->name('eliminarcaso');


