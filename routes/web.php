<?php

use App\Http\Controllers\EntretenimientoController;
use App\Http\Controllers\FormatoController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});


Route::resource('entretenimiento', App\Http\Controllers\EntretenimientoController::class)->middleware('auth');
Route::resource('formatos', App\Http\Controllers\FormatoController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [EntretenimientoController::class, 'index'])->name('home');
});
