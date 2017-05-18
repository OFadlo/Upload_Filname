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
    return view('welcome');
});


Route::get('admin', 'AdminsController@index');
Route::post('admin/uploadFiles','AdminsController@store');

/*Route::group(['middleware' => ['web']], function() {
  Route::resource('admin/','Adminscontroller');
  Route::post ( '/store', 'Adminscontroller@store' );
  Route::post ( '/edit', 'Adminscontroller@edit' );
  Route::post ( '/add', 'Adminscontroller@create' );
  Route::post ( '/destroy', 'Adminsontroller@destroy' );
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
