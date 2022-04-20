<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
});

Route::get('/client/list', [ClientController::class,'list'])->name('client-list');

Route::get('/client/add', function () {
    return view('client.add');
})->name('client-form');

Route::post('/client/add', [ClientController::class,'add_client']);

Route::get('/currency/load',[\App\Http\Controllers\CurrencyController::class,'load'])->name('currency-load');
Route::get('/currency/list',[\App\Http\Controllers\CurrencyController::class,'list'])->name('currency-list');
