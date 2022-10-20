<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PagesController;
use App\http\Controllers\PostsController;
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
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);
Route::get('/forgotpass', [PagesController::class, 'forgotpass']);
Route::get('/changepass', [PagesController::class, 'changepass']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);
Route::get('/updateinfo', [PagesController::class, 'updateinfo']);

Route::resource('posts','PostsController');
