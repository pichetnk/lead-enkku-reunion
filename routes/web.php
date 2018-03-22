<?php

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

 

Route::get('facebook-login', ['uses' => 'AuthController@redirectToFacebook'])->name('facebook-login');
Route::get('fb-callback', ['uses' => 'AuthController@handleFacebookCallback']);
 
//Auth::routes();
//Passport::routes();
Route::get('login',  function () {
    return redirect()->route('home');
})->name('login');


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/team', function () {
    return view('team');
})->name('team');