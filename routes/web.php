<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\MedicamentoController;
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

Auth::routes();
Route::get('login-redirect', [HomeController::class, 'loginRedirect']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homeadmin', [AdminController::class, 'home'])->middleware('can:homeadmin')->name('homeadmin');
Route::get('/crearpac',[DatosController::class,'create'])->name('datospac');
Route::post('crearpac/{id}',[DatosController::class,'store'])->name('gdatos');
Route::get('/agregarmed',[MedicamentoController::class,'create'])->name('agmed');
Route::post('/agregarmed/{id}', [MedicamentoController::class,'create'])->name('gmed');