<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GPACalculatorController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/card', function () {
    return view('card');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/flexbox', function () {
    return view('flexbox');
});


Route::get('/gpa', [GPACalculatorController::class, 'showForm'])->name('gpa.form');
Route::post('/calculate-gpa', [GPACalculatorController::class, 'calculateGPA'])->name('calculateGPA');
