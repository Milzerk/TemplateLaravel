<?php

use App\Http\Controllers\auth\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Auth::class, 'loginPage'])->name('loginPage');
Route::get('/register', [Auth::class, 'registerPage'])->name('registerPage');
Route::post('/login', [Auth::class, 'login'])->name('login');
Route::post('/register', [Auth::class, 'register'])->name('register');
