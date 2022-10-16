<?php

use App\Http\Controllers\BrewController;
use App\Http\Controllers\CoffeeController;
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

Route::get('/', [BrewController::class, 'index']);

Route::get('/coffee', [CoffeeController::class, 'index'])->name('coffees');
Route::get('/coffee/{id}')->name('coffee');
Route::get('/brew', [BrewController::class, 'index'])->name('brews');
Route::get('/brew/{id}', [BrewController::class, 'show'])->name('brew');
Route::get('/brewer')->name('brewers');
Route::get('/about')->name('about');
