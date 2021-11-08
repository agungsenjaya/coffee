<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

$locale = App::currentLocale();

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
    Route::GET('/','ClientController@home')->name('index.home');
    Route::GET('about','ClientController@about')->name('about');
    Route::GET('products/view/{id}','ClientController@product_view')->name('product_view');
    Route::GET('products','ClientController@product')->name('product');
    Route::GET('contact','ClientController@contact')->name('contact');
    Route::POST('contact/send','ClientController@contact_send')->name('contact.send');

// Auth::routes();
Auth::routes(['register' => false, 'reset' => false]);

Route::GROUP(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::GET('home', 'HomeController@index')->name('home');
    Route::GET('website', 'HomeController@website')->name('website');
    Route::GET('account', 'HomeController@account')->name('account');
    Route::POST('account/update/{id}', 'HomeController@account_update')->name('update.account');

    Route::GET('product','ProductController@index')->name('index.product');
    Route::GET('product/create','ProductController@create')->name('create.product');
    Route::POST('product/store','ProductController@store')->name('store.product');
    Route::GET('product/edit/{id}','ProductController@edit')->name('edit.product');
    Route::POST('product/update/{id}','ProductController@update')->name('update.product');
    Route::GET('product/delete/{id}','ProductController@destroy')->name('delete.product');
});

