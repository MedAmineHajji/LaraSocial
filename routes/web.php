<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home', ["connected" => true]);
});


Route::get('/profile', function () {
    return view('profiles.profile', ["connected" => true]);
});

Route::get('/me', function () {
    return view('profiles.myProfile', ["connected" => true]);
});
