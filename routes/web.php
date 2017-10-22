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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/boots','FrontController@boots')->name('boots');
Route::get('/product','FrontController@product')->name('product');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('home');

Route::get('/home', 'HomeController@index');
Route::resource('/cart','CartController');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
	Route::get('/',function() {
		return view ('admin.index');
	})->name('admin.index');

	Route::resource('product','ProductsController');
	Route::resource('category','CategoriesController');
	Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
});