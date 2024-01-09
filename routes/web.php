<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\Dashboard\ProjectsController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MaterielsController;


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

// Route::get('/', function () {
//     return view('dashboard.admin.index');
// });

Route::get('/accueil',[HomeController::class,'create'])->name('accueil');
Route::get('/services',[ServiceController::class, 'create'])->name('services');
Route::get('/contact',[ContactController::class, 'create'])->name('contact');
Route::get('/apropos',[AboutController::class, 'create'])->name('apropos');
Route::get('/projets',[ProjetController::class, 'index'])->name('projets');
Route::get('/projets/sodexam',[ProjetController::class, 'create'])->name('projets/sodexam');
Route::get('/liste/materiel',[MaterielController::class, 'create'])->name('liste/materiel');
Route::post('/contact/submit',[ContactController::class, 'store'])->name('contact/submit');

// Dashboard
//  Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
// });
Route::get('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index');
//services
Route::get('dashboard/services',[ServicesController::class, 'create'])->name('dashboard.services');
Route::post('dashboard/nosServices',[ServicesController::class, 'store'])->name('dashboard.nosServices');
Route::get('dashboard/liste',[ServicesController::class, 'index'])->name('dashboard.liste');
Route::get('dashboard/edit/{id}',[ServicesController::class, 'edit'])->name('dashboard.edit');
Route::put('dashboard/update/{id}',[ServicesController::class, 'update'])->name('dashboard.update');
Route::delete('dashboard/delete/{id}',[ServicesController::class, 'destroy'])->name('dashboard.delete');
Route::get('dashboard/show/{id}',[ServicesController::class, 'show'])->name('dashboard.show');


//projects
route::get('dashboard/projects',[ProjectsController::class, 'create'])->name('dashboard.projects');
Route::post('dashboard/store',[ProjectsController::class, 'store'])->name('dashboard.store');
Route::get('dashboard/listeprojects',[ProjectsController::class, 'index'])->name('dashboard.listeprojects');
Route::get('dashboard/showprojects/{id}',[ProjectsController::class, 'show'])->name('dashboard.showprojects');
Route::get('dashboard/editprojects/{id}',[ProjectsController::class, 'edit'])->name('dashboard.editprojects');
Route::put('dashboard/updateprojects/{id}',[ProjectsController::class, 'update'])->name('dashboard.updateprojects');
Route::delete('dashboard/deleteprojects/{id}',[ProjectsController::class, 'destroy'])->name('dashboard.deleteprojects');


//materiels
Route::prefix('materiel')->name('materiel.')->group(function () {
    Route::get('index',[MaterielsController::class ,'index'])->name('index');
    Route::get('create',[MaterielsController::class, 'create'])->name('create');
    Route::post('store',[MaterielsController::class, 'store'])->name('store');
    Route::put('update/{id}',[MaterielsController::class, 'update'])->name('update');
    Route::get('edit/{id}',[MaterielsController::class, 'edit'])->name('edit');
    Route::get('show/{id}',[MaterielsController::class, 'show'])->name('show');
    Route::delete('delete',[MaterielsController::class, 'destroy'])->name('delete');
});
//
Route::post('/utilisateur',[LoginController::class,'store'])->name('utilisateur');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
