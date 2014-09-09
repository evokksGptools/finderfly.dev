<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{

		return View::make('index');
	}

	public function cadastro()
	{

		$app_id = '9318407';
		$app_token = '1196db54354d4b7a887d2615455293f0';
		$app_client_id = 'contato-cuupjl';
		$app_client_token = 'V8bAuXoDMohks2cBU436hgGzvdz1bipcXPnx2x2ZrgJOC1ItMXlM6koqjfbiUVdV';
  
		Podio::setup($app_client_id, $app_client_token);
  
		$data = array(
			'fields' => array(
				"titulo" => Input::get("nome"),
				"sobrenome" => Input::get("sobrenome"),
				"email" => Input::get("email"),
				"telefone" => Input::get("telefone"),
				"motivocontato" => "finderfly - ".Input::get("motivo_contato"),
				"mensagem" => Input::get("text"),
				"ip" => $_SERVER['REMOTE_ADDR']
			)
		);

		Podio::authenticate('app', array('app_id' => $app_id, 'app_token' => $app_token));

		PodioItem::create($app_id, $data);

		return "Formulário enviado com sucesso!";
	}

	public function cadastroLogin()
	{

		$app_id = '9318499';
		$app_token = 'adca1675804a4ecea30a17f7fed09004';
		$app_client_id = 'contato-cuupjl';
		$app_client_token = 'V8bAuXoDMohks2cBU436hgGzvdz1bipcXPnx2x2ZrgJOC1ItMXlM6koqjfbiUVdV';
  
		Podio::setup($app_client_id, $app_client_token);
  
		$data = array(
			'fields' => array(
				"titulo" => Input::get("nome_cad"),
				"email" => Input::get("email_cad"),
				"ip" => $_SERVER['REMOTE_ADDR']
			)
		);

		Podio::authenticate('app', array('app_id' => $app_id, 'app_token' => $app_token));

		PodioItem::create($app_id, $data);

		return "Formulário enviado com sucesso!";
	}

}


