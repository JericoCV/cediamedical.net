<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

Route::get('/',pageController::class)->name('home');
Route::get('/cediamedical',[pageController::class,'cediamedical'])->name('cediamedical');
Route::get('/mision',[pageController::class,'mision'])->name('mision');
Route::get('/vision',[pageController::class,'vision'])->name('vision');
Route::get('/valores',[pageController::class,'valores'])->name('valores');
Route::get('/noticias',[pageController::class,'noticias'])->name('noticias');
Route::get('/medimagen',[pageController::class,'medimagen'])->name('medimagen');
Route::get('/alerta',[pageController::class,'alerta'])->name('alerta');
Route::get('/centromedico',[pageController::class,'centromedico'])->name('centromedico');
Route::get('/salud',[pageController::class,'salud'])->name('salud');
Route::get('/contactenos',[pageController::class,'contactenos'])->name('contactenos');
Route::get('/cediatemporalsignup',[pageController::class,'signup'])->name('signup');
Route::get('/CediaAdminHome',[pageController::class,'AdminHome'])->name('AdminHome');

Route::post('login',[UserController::class,'login'])->name('login');
Route::post('logout',[UserController::class,'logout'])->name('logout');
Route::post('signup',[UserController::class,'signup'])->name('signup');
