<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DramaController;
use App\Http\Controllers\InterviewController;

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

Route::get('/', [InterviewController::class, 'index']);

//usuários
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);

//dramas
Route::get('/dramas', [DramaController::class, 'index']);
Route::get('/drama/create', [DramaController::class, 'create']);

//entrevistas
Route::get('/interviews', [InterviewController::class, 'index']);
Route::get('interview/create', [InterviewController::class, 'create']);

