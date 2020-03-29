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

$router->get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

$router->get('/shops/{id}', ['as' => 'shops', 'uses' => 'ShopsController@index']);

$router->get('/shops/{id}/product/{ref}', ['as' => 'product', 'uses' => 'ProductsController@index']);

$router->get('/shops/{id}/cart', ['as' => 'cart', 'uses' => 'CartController@index']);

$router->get('/users', ['as' => 'users', 'uses' => 'UsersController@index']);

$router->get('/cart/{id}', ['as' => 'cart', 'uses' => 'CartController@index']);

$router->get('/account', ['as' => 'account', 'uses' => 'AccountController@index']);
