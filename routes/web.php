<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasoController;

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


Route::get('/caso.index',[CasoController::class,'index'])->name('caso.index');
Route::get('/caso.create',[CasoController::class,'create'])->name('caso.create');
Route::post('/caso.store',[CasoController::class,'store'])->name('caso.store');
Route::get('/editarcaso/{id}',[CasoController::class,'edit'])->name('editarcaso');
Route::put('/actualizarcaso/{id}',[CasoController::class,'update'])->name('actualizarcaso');
Route::delete('/eliminarcaso/{id}',[CasoController::class,'destroy'])->name('eliminarcaso');


