<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('/users', ['as' => 'users', 'uses' => 'UsersController@index']);
Route::get('/cart/{id}', ['as' => 'cart', 'uses' => 'CartController@index']);
Route::get('/account', ['as' => 'account', 'uses' => 'AccountController@index']);

Route::group([
  'prefix' => 'shops',
  'as' => 'shops.'
], function () {
  Route::get('/{id}', ['as' => 'shop', 'uses' => 'ShopsController@index']);
  Route::get('/{id}/product/{ref}', ['as' => 'product', 'uses' => 'ProductsController@index']);
  Route::get('/{id}/cart', ['as' => 'cart', 'uses' => 'CartController@index']);
});