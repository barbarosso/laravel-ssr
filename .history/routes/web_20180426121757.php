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

Route::pattern('url', '.*');

Route::get('/', 'WelcomeController');

Route::get('vue/{url?}', 'VueController');

Route::get('react/home', 'ReactController@home');

Route::get('react/test', 'ReactController@test');

Route::get('react/{url?}', 'ReactController');


