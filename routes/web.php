<?php

use App\Http\Controllers\AthController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\HomeController;
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

Route::get('/login', [AthController::class,'show'])->name('auth.login');
Route::post('/login', [AthController::class,'login'])->name('login');
Route::post('/signIn', [AthController::class,'signIn'])->name('signIn');
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/logout', [AthController::class, 'logout'])->name('auth.logout');


Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements.index');
Route::get('/evenements/create', [EvenementController::class, 'create'])->name('evenements.create');
Route::post('/evenements', [EvenementController::class, 'store'])->name('evenements.store');
Route::get('/evenements/{evenement}', [EvenementController::class, 'show'])->name('evenements.show');
Route::get('/evenements/{evenement}/edit', [EvenementController::class, 'edit'])->name('evenements.edit'); 
Route::put('/evenements/{evenement}', [EvenementController::class, 'update'])->name('evenements.update');
Route::delete('/evenements/{evenement}', [EvenementController::class, 'destroy'])->name('evenements.destroy');
