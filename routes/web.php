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
// Place other routes than Vue before the [Vue route capture]
Route::get('/', 'HomeController@index')->name('home');

// Vue Route capture
Route::get('/{vue_capture?}', function () {
    return view('landing');
})->where('vue_capture', '[\/\w\.-]*');