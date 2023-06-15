<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicoController;

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
Route::get('/CediaAdminProfesionals',[pageController::class,'AdminProfesionals'])->name('AdminProfesionals');
Route::get('/CediaAdminSettings',[pageController::class,'AdminSettings'])->name('AdminSettings');

Route::post('login',[UserController::class,'login'])->name('login');
Route::post('logout',[UserController::class,'logout'])->name('logout');
Route::post('signup',[UserController::class,'signup'])->name('signup');
Route::post('consultas',[ConsultaController::class,'store'])->name('consulta.store');
Route::post('consulta/update',[ConsultaController::class,'update'])->name('update-consulta');
Route::post('profesionales',[MedicoController::class,'create'])->name('profesionales-create');
Route::post('profesionales/update',[MedicoController::class,'update'])->name('profesionales-update');
Route::post('profesionales/delete',[MedicoController::class,'delete'])->name('profesionales-delete');
