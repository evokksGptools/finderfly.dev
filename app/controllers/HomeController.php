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
				"titulo" => Input::get("nomecad"),
				"email" => Input::get("emailcad"),
				"ip" => $_SERVER['REMOTE_ADDR']
			)
		);

		Podio::authenticate('app', array('app_id' => $app_id, 'app_token' => $app_token));

		PodioItem::create($app_id, $data);

		return "Cadastro enviado com sucesso!<br>Entraremos em contato!";
	}

	public function login_cake(){


		$urlXml = "http://pricefindercp.com.br/api/2/auth.asmx/Login?username=".Input::get('username')."&password=".urlencode(Input::get('password'))."&ip_address=".Input::get('ip_address');

		Session::put('username', Input::get('username'));
		Session::put('password', Input::get('password'));
		Session::put('ip', Input::get('ip_address'));

		$xmlDoc = simplexml_load_file($urlXml);

		if($xmlDoc->success != 'false'){
			$status = "Login Valido";
			$req_status = true;
			$url = "/cake_true";
			$mensagem = "Login Valido";
		}else{
			$status = "Login Invalido";
			$url = "";
			$req_status = false;
			$mensagem = "E-mail ou senha inválidos";
		}

		return Response::json(array(
				'status'=>$req_status,
				'redirect_url'=>$url,
				'mensagem'=>$mensagem

			));

		return $status;
	}

	public function cake_true(){
		$dados = array(
            	'u'=>Session::get('username'),
            	'p'=>Session::get('password')
            	);


		/* if(isset($_POST['Name']))     $Name   = $_POST['Name'];
		 if(isset($_POST['Email']))   $Email   = $_POST['Email'];
		 if(isset($_POST['Message']))   $Message= htmlentities($_POST['Message']);
		 
		 $Curl_Session = curl_init('http://pricefindercp.com.br/advertisers/login.ashx?tp=1');
		 curl_setopt ($Curl_Session, CURLOPT_POST, 1);
		 curl_setopt ($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($dados));
		 curl_setopt ($Curl_Session, CURLOPT_FOLLOWLOCATION, 1);
		 $out= curl_exec ($Curl_Session);
		 curl_close ($Curl_Session);
		 file_put_contents(__DIR__ . "/teste.html",$out);
		 header("Location:http://pricefindercp.com.br/");
		 exit();

*/
		//$ws_url = $url . "?" . http_build_query($dados);
            $ch = curl_init("http://pricefindercp.com.br/advertisers/login.ashx?tp=1");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);


            $dados = array(
            	'u'=>Session::get('username'),
            	'p'=>Session::get('password')
            	);

            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            $output = curl_exec($ch);

            return View::make('contents.retornocake',array('cake_login'=>$output));


            
            
			return Redirect::to("http://pricefindercp.com.br/advertisers/login.ashx?tp=1");
	}
}


