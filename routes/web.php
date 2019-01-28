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

Route::get('/', function () {
    return view('main/5');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/app',function(){
    return view('layouts.app');
});
//재민 임시
Route::get('top', function() {
    return view('main.1');
});
