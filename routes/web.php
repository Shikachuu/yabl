<?php

use App\Http\Controllers\BrewController;
use App\Http\Controllers\GeneralController;
use App\Http\Livewire\Brews;
use App\Http\Livewire\Coffees;
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

Route::get('/', [GeneralController::class, 'index']);

Route::get('/coffee', Coffees::class)->name('coffees');
Route::get('/coffee/{id}')->name('coffee');
Route::get('/brew', Brews::class)->name('brews');
Route::get('/brew/{id}', [BrewController::class, 'show'])->name('brew');
Route::get('/brewer')->name('brewers');
Route::get('/about')->name('about');
