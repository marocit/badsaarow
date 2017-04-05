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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');



//Route::get('anmeldung', 'RegisterController@index')->name('anmeldung');

Route::get('/', 'RegisterController@index');
Route::get('contact', 'RegisterController@contact');
Route::resource('anmeldung', 'RegisterController');

Route::group(['middleware' => 'admin'], function (){

    Route::get('admin', 'AdminController@index')->name('admin');
});

    


