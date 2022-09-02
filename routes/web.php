<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RamaDerechoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;




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
    return redirect()->route('verLogin');
});

Route::get('/home',[HomeController::class,'index'])->name('home');


//Registro
Route::get('/verRegister',[RegisterController::class,'verRegister'])->name('verRegister');
Route::post('/register',[RegisterController::class,'register'])->name('register');


//Inicio de Sesión
Route::get('/verLogin',[LoginController::class,'verLogin'])->name('verLogin');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('cerrarsesion');


// Casos
Route::group(['middleware' => ['role:Abogado']], function () {
    Route::get('/caso.index',[CasoController::class,'index'])->name('caso.index');
    
    Route::get('/editarcaso/{id}',[CasoController::class,'edit'])->name('editarcaso');
    Route::put('/actualizarcaso/{id}',[CasoController::class,'update'])->name('actualizarcaso');
    Route::delete('/eliminarcaso/{id}',[CasoController::class,'destroy'])->name('eliminarcaso');
});




    Route::group(['middleware' => ['role:Abogado|Cliente']], function () {
        
        Route::get('/caso.create',[CasoController::class,'create'])->name('caso.create');
        Route::post('/caso.store',[CasoController::class,'store'])->name('caso.store');
    });


// Ramas 
Route::group(['middleware' => ['role:Abogado']], function () {
    
    Route::get('/rama.index',[RamaDerechoController::class,'index'])->name('rama.index');
    Route::get('/rama.create',[RamaDerechoController::class,'create'])->name('rama.create');
    Route::post('/rama.store',[RamaDerechoController::class,'store'])->name('rama.store');
    Route::get('/editarrama/{id}',[RamaDerechoController::class,'edit'])->name('editarrama');
    Route::put('/actualizarrama/{id}',[RamaDerechoController::class,'update'])->name('actualizarrama');
    Route::delete('/eliminarrama/{id}',[RamaDerechoController::class,'destroy'])->name('eliminarrama');
    
});


