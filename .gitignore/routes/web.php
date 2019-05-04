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


Route::get('/', 'PagesController@done');
Route::get('/', 'PagesController@index');

Route::get('/display', 'ProductsController@display');

Route::get('/admin', 'ProductsController@index')->middleware('auth')->name('admin');

Route::get('/addItem', 'ProductsController@additem');

Route::post('/addItem', 'ProductsController@store');

Route::get('/edit/{id}', 'ProductsController@edit');

Route::post('/updating/{id}', 'ProductsController@update');

Route::get('/delete/{id}', 'ProductsController@delete');

Route::get('/cart/{id}', 'ProductsController@addtocart');

Route::get('/cartitems', 'CartController@viewcart');

Route::get('/remove/{id}', 'CartController@delete');

Route::get('/placeorder', 'HouseController@place');

Route::post('/placeorder', 'HouseController@store');

Route::get('/myorders', 'ProductsController@orders');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/done', function () {
    return view('done');
});