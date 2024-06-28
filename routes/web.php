<?php

use App\Http\Controllers\PageController;
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


Route::get('/table', [PageController::class, 'table'])->name('table');
Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('/details', [PageController::class, 'details'])->name('details');
Route::get('/formulaire', [PageController::class, 'formulaire'])->name('formulaire');


Route::get('/', function () {
    return view('sections/index');
});
