<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaterielController;


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
    return view('home.accueil');
});

Route::get('/accueil',[HomeController::class,'create'])->name('accueil');
Route::get('/services',[ServiceController::class, 'create'])->name('services');
Route::get('/contact',[ContactController::class, 'create'])->name('contact');
Route::get('/apropos',[AboutController::class, 'create'])->name('apropos');
Route::get('/projets',[ProjetController::class, 'index'])->name('projets');
Route::get('/projets/sodexam',[ProjetController::class, 'create'])->name('projets/sodexam');
Route::get('/liste/materiel',[MaterielController::class, 'create'])->name('liste/materiel');
Route::post('/contact/submit',[ContactController::class, 'store'])->name('contact/submit');