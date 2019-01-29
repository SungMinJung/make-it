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

Route::group(['prefix'=>'Service','as'=>'service.'],function(){
    Route::get('/website','ServiceController@web')->name('web');
    Route::get('/Mobile_Application','ServiceController@mobile')->name('mobile');
    Route::get('/Responsive_Application','ServiceController@responsive')->name('responsive');

});
Route::get('/About_us','AboutusController@index')->name('about');
Route::get('/Portfolio','PortfolioController@index')->name('portfolio');
Route::get('/QandA','QnaController@index')->name('qna');
Route::get('/Contact_us','ContactusController@index')->name('contact');
// Route::get('/Portfolio','')
