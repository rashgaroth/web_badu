<?php

use App\Http\Controllers\RegisterController;
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

Route::get('home', function () {
    return view('content.content');
});

Route::get('register', 'RegisterController@register');
Route::post('register/regist_mitra', 'RegisterController@registMitra');
Route::get('alert/{AlertType}', 'RegisterController@register')->name('alert');
