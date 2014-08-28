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

Route::get('empresa', function()
{
	return View::make('institucional.empresa');
});

Route::get('contato', function()
{
	return View::make('institucional.contato');
});

Route::get('ass_tecnica', function()
{
	return View::make('institucional.ass_tecnica');
});

Route::get('suporte', function()
{
	return View::make('institucional.suporte');
});

Route::get('produto', function()
{
	return View::make('produto.produto');
});

Route::get('produto_carrinho', function()
{
	return View::make('produto.produto_carrinho');
});

Route::get('produto_compra', function()
{
	return View::make('produto.produto_compra');
});