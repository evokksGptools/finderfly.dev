<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::post('/envia_cadastro', 'HomeController@cadastro');

Route::post('/envia_cadastro_lg', 'HomeController@cadastroLogin');

Route::any('/login_cake', 'HomeController@login_cake');

Route::get('/cake_true', 'HomeController@cake_true');

Route::post('/newlet', 'HomeController@newlet');