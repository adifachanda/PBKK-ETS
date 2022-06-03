<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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


Route::get('/home', function () {
    return view('home');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticated']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/register', [AuthController::class, 'indey'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'authenticated']);
});
Route::get('/login', function () {
    return redirect()->route('auth.login');
});
Route::get('/logout', function () {
    return redirect()->route('auth.logout');
});

Route::get('/register', function () {
    return redirect()->route('auth.register');
});
