<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jeniskamarcontroller;
use App\Http\Controllers\kamarcontroller;

use Illuminate\Support\Facades\Auth;

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
    return view('home');

})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jeniskamar', [jeniskamarcontroller::class, 'index']);
Route::get('/jeniskamar/form', [jeniskamarcontroller::class, 'create']);
Route::post('/jeniskamar/store', [jeniskamarcontroller::class, 'store']);
Route::get('/jeniskamar/edit/{id}', [jeniskamarcontroller::class, 'edit']);
Route::put('/jeniskamar/{id}', [jeniskamarcontroller::class, 'update']);
Route::delete('/jeniskamar/{id}', [jeniskamarcontroller::class, 'destroy']);

Route::get('/kamar', [kamarcontroller::class, 'index']);
Route::get('/kamar/form', [kamarcontroller::class, 'create']);
Route::post('/kamar/store', [kamarcontroller::class, 'store']);
Route::get('/kamar/edit/{id}', [kamarcontroller::class, 'edit']);
Route::put('/kamar/{id}', [kamarcontroller::class, 'update']);
Route::delete('/kamar/{id}', [kamarcontroller::class, 'destroy']);


