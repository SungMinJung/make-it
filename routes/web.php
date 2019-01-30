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
    return view('main/index');
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
// contactus관련라우트
Route::get('/admin','ContactusController@admin')->name('contact.admin');
Route::get('/Contact_us','ContactusController@index')->name('contact');
Route::post('/Contact_us','ContactusController@store')->name('contact.store');
Route::get('/Contact_us/{id}','ContactusController@show')->name('contact.show');
Route::delete('/Contact_us/{id}','ContactusController@destroy')->name('contact.destroy');
Route::get('/hi', function() {
    return view('contact.aftersend');
});
// Route::get('/Portfolio','')
