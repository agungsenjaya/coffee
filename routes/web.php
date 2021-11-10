<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// Route::group(['prefix' => LaravelLocalization::getCurrentLocale()], function()
{
    Route::GET('/','ClientController@home')->name('index.home');
    Route::GET('about','ClientController@about')->name('about');
    Route::GET('product/view/{id}','ClientController@product_view')->name('product_view');
    Route::GET('product','ClientController@product')->name('product');
    Route::GET('contact','ClientController@contact')->name('contact');
    Route::POST('contact/send','ClientController@contact_send')->name('contact.send');
    // Route::GET('404','ClientController@notFOund')->name('404');
});

    
// Auth::routes();
Auth::routes(['register' => false, 'reset' => false]);

Route::GROUP(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::GET('home', 'HomeController@index')->name('home');
    Route::GET('website', 'HomeController@website')->name('website');
    Route::GET('account', 'HomeController@account')->name('account');
    Route::POST('account/update/{id}', 'HomeController@account_update')->name('update.account');

    Route::GET('products','ProductController@index')->name('index.product');
    Route::GET('products/create','ProductController@create')->name('create.product');
    Route::POST('products/store','ProductController@store')->name('store.product');
    Route::GET('products/edit/{id}','ProductController@edit')->name('edit.product');
    Route::POST('products/update/{id}','ProductController@update')->name('update.product');
    Route::GET('products/delete/{id}','ProductController@destroy')->name('delete.product');
});

