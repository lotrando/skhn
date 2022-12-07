<?php

use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\ReceptController;
use Illuminate\Support\Facades\Artisan;
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
    return view('recept.create');
});

Route::resource('/erecept', ReceptController::class);

Route::resource('/pharmacies', PharmacyController::class);

Route::get('/migration', function () {
Artisan::call('migrate:fresh --seed');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
