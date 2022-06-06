<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\logoutController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/blank', function () {
    return view('Hotel Page.blank');
});
Route::group(['middleware' => ['auth']], function () {
    //route that use auth middleware before entering site
    Route::get('/logout', [logoutController::class, 'perform']);
    Route::get('/profile', function () {
        return view('Hotel Page.profile');
    });
});
Route::get('/register', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
