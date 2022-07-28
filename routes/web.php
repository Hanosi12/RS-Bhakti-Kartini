<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Action\PasienController;
use App\Http\Controllers\Action\DokterController;
use App\Http\Controllers\Action\DeveloperController;
use App\Http\Controllers\Action\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::get('/', function () { return view('index');});
Route::get('/layanan', function () { return view('/UI/Home/layanan');});
Route::get('/tentang', function () { return view('/UI/Home/tentang');});
Route::get('/dokter', function () { return view('/UI/Home/dokter');});
Route::get('/artikel', function () { return view('/UI/Home/artikel');});
Route::get('/artikeldetail', function () { return view('/UI/Home/artikeldetail');});
Route::get('/kontak', function () { return view('/UI/Home/kontak');});

Auth::routes();

//Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('Ahome');
});

//Pasien Routes
Route::middleware(['auth','pasien'])->group(function(){
    Route::get('/home', [PasienController::class, 'index'])->name('Phome');
});

//Developer Routes
Route::prefix('Developer')->middleware(['auth','developer'])->group(function(){
    Route::get('/home', [DeveloperController::class, 'index'])->name('Dhome');
});

//Dokter Routes
Route::prefix('Dokter')->middleware(['auth','dokter'])->group(function(){
    Route::get('/home', [DokterController::class, 'index'])->name('Uhome');
});
