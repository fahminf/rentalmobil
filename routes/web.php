<?php

namespace App\Http\Controllers;

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

Route::get('/welcome', function () {
    echo "Selamat datang di Laravel";
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/create', [MobilController::class, 'create']); //memanggil form
Route::post('/mobil/simpanData', [MobilController::class, 'store']); //mengirim request
Route::get('/merk', [MerkController::class, 'index']);
Route::get('merk/create', [MerkController::class, 'create']);
Route::post('/merk/simpanData', [MerkController::class, 'store']);

Route::get('/merk/edit/{id}', [MerkController::class, 'edit']);
Route::post('/merk/update/{id}', [MerkController::class, 'update']);
Route::get('/merk/delete/{id}', [MerkController::class, 'delete']);
