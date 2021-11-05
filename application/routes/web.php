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

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard');
Route::post('/user-update/{id}','App\Http\Controllers\DashboardController@update')->name('user.update');
Route::post('/user-deny/{id}','App\Http\Controllers\DashboardController@destroy')->name('user.destroy');

require __DIR__.'/auth.php';
