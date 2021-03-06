<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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

Route::get('/conjugator', function () {
    return view('conjugator');
});

Route::get('/numbers', function () {
    return view('numbers');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

