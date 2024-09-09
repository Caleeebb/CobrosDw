<?php

use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use Faker\Guesser\Name;
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

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/logIn', [LogInController::class, 'store'])->name('logIn');

Route::get('/registro', [RegisterController::class, 'create'])->name('formRegister');
Route::post('/registro',[RegisterController::class, 'store'])->name('userCreate');

Route::post('/logout', [LogOutController::class, 'destroy'])->middleware('auth')->name('logOut');
Route::get('/dashboard', function(){
return view('dashboard');
})->middleware('auth')->name('home');

