<?php

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

Route::get('/', function () {
    return view('welcome');
});
// write laravel application for upload and preview file include controller, model, routes, blade views,database, step by code
Route::get('/files', [\App\Http\Controllers\FileController::class, 'index'])->name('files.index');
Route::get('/files/create', [\App\Http\Controllers\FileController::class, 'create'])->name('files.create');
Route::post('/files', [\App\Http\Controllers\FileController::class, 'store'])->name('files.store');
