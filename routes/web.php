<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

use App\Http\Controllers\ContentController;

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


Route::get('/', [SessionController::class, 'index']);
Route::get('/adminview', [SessionController::class, 'adminview'])->name('coba');
Route::get('/login', [SessionController::class, 'login']);
Route::post('/auth', [SessionController::class, 'auth']);
Route::get('/logout', [ContentController::class, 'logout']);
Route::get('/showdetail/{id}', [SessionController::class, 'showdetail']);
Route::get('/processfilterprogramming', [SessionController::class, 'processFilterProgramming']);
Route::get('/processfilterbahasa_inggris', [SessionController::class, 'processFilterBahasaInggris']);



Route::get('/search', [ContentController::class, 'search'])->name('cari');
Route::get('/create', [ContentController::class, 'create']);
Route::get('/update/{id}', [ContentController::class, 'update']);
Route::put('/edit/{id}', [ContentController::class, 'edit']);
Route::post('/store', [ContentController::class, 'store']);
Route::get('/view/{id}', [ContentController::class, 'view']);
Route::delete('/destroy/{id}', [ContentController::class, 'destroy']);
