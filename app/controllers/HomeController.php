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

		return View::make('index',array('paises'=>$this->getPaises()));
	}

	public function cadastro()
	{

		$app_id = '9230318';
		$app_token = 'ce17b02d62de4c44b93591b08432f7c5';
		$app_client_id = 'contato-cuupjl';
		$app_client_token = 'V8bAuXoDMohks2cBU436hgGzvdz1bipcXPnx2x2ZrgJOC1ItMXlM6koqjfbiUVdV';
  
		Podio::setup($app_client_id, $app_client_token);
  
		$data = array(
			'fields' => array(
				"titulo" => Input::get("nome"),
				"senha" => Input::get("sobrenome"),
				"pais" => Input::get("email"),
				"plataforma" => Input::get("telefone"),
				"documento" => Input::get("motivo_contato"),
				"mensagem" => Input::get("text"),
				"ip" => $_SERVER['REMOTE_ADDR']
			)
		);

		Podio::authenticate('app', array('app_id' => $app_id, 'app_token' => $app_token));

		PodioItem::create($app_id, $data);

		return Redirect::to('/');
	}


	
	protected function getPaises(){
		$paises = array(
			''=>'Pa&iacute;s',
			'África do Sul'=>'África do Sul',
			'Albânia'=>'Albânia',
			'Alemanha'=>'Alemanha',
			'Andorra'=>'Andorra',
			'Angola'=>'Angola',
			'Anguilla'=>'Anguilla',
			'Antigua'=>'Antigua',
			'Arábia Saudita'=>'Arábia Saudita',
			'Argentina'=>'Argentina',
			'Armênia'=>'Armênia',
			'Aruba'=>'Aruba',
			'Austrália'=>'Austrália',
			'Áustria'=>'Áustria',
			'Azerbaijão'=>'Azerbaijão',
			'Bahamas'=>'Bahamas',
			'Bahrein'=>'Bahrein',
			'Bangladesh'=>'Bangladesh',
			'Barbados'=>'Barbados',
			'Bélgica'=>'Bélgica',
			'Benin'=>'Benin',
			'Bermudas'=>'Bermudas',
			'Botsuana'=>'Botsuana',
			'Brasil" selected>Brasil',
			'Brunei'=>'Brunei',
			'Bulgária'=>'Bulgária',
			'Burkina Fasso'=>'Burkina Fasso',
			'botão'=>'botão',
			'Cabo Verde'=>'Cabo Verde',
			'Camarões'=>'Camarões',
			'Camboja'=>'Camboja',
			'Canadá'=>'Canadá',
			'Cazaquistão'=>'Cazaquistão',
			'Chade'=>'Chade',
			'Chile'=>'Chile',
			'China'=>'China',
			'Cidade do Vaticano'=>'Cidade do Vaticano',
			'Colômbia'=>'Colômbia',
			'Congo'=>'Congo',
			'Coréia do Sul'=>'Coréia do Sul',
			'Costa do Marfim'=>'Costa do Marfim',
			'Costa Rica'=>'Costa Rica',
			'Croácia'=>'Croácia',
			'Dinamarca'=>'Dinamarca',
			'Djibuti'=>'Djibuti',
			'Dominica'=>'Dominica',
			'EUA'=>'EUA',
			'Egito'=>'Egito',
			'El Salvador'=>'El Salvador',
			'Emirados Árabes'=>'Emirados Árabes',
			'Equador'=>'Equador',
			'Eritréia'=>'Eritréia',
			'Escócia'=>'Escócia',
			'Eslováquia'=>'Eslováquia',
			'Eslovênia'=>'Eslovênia',
			'Espanha'=>'Espanha',
			'Estônia'=>'Estônia',
			'Etiópia'=>'Etiópia',
			'Fiji'=>'Fiji',
			'Filipinas'=>'Filipinas',
			'Finlândia'=>'Finlândia',
			'França'=>'França',
			'Gabão'=>'Gabão',
			'Gâmbia'=>'Gâmbia',
			'Gana'=>'Gana',
			'Geórgia'=>'Geórgia',
			'Gibraltar'=>'Gibraltar',
			'Granada'=>'Granada',
			'Grécia'=>'Grécia',
			'Guadalupe'=>'Guadalupe',
			'Guam'=>'Guam',
			'Guatemala'=>'Guatemala',
			'Guiana'=>'Guiana',
			'Guiana Francesa'=>'Guiana Francesa',
			'Guiné-bissau'=>'Guiné-bissau',
			'Haiti'=>'Haiti',
			'Holanda'=>'Holanda',
			'Honduras'=>'Honduras',
			'Hong Kong'=>'Hong Kong',
			'Hungria'=>'Hungria',
			'Iêmen'=>'Iêmen',
			'Ilhas Cayman'=>'Ilhas Cayman',
			'Ilhas Cook'=>'Ilhas Cook',
			'Ilhas Curaçao'=>'Ilhas Curaçao',
			'Ilhas Marshall'=>'Ilhas Marshall',
			'Ilhas Turks & Caicos'=>'Ilhas Turks & Caicos',
			'Ilhas Virgens (brit.)'=>'Ilhas Virgens (brit.)',
			'Ilhas Virgens(amer.)'=>'Ilhas Virgens(amer.)',
			'Ilhas Wallis e Futuna'=>'Ilhas Wallis e Futuna',
			'Índia'=>'Índia',
			'Indonésia'=>'Indonésia',
			'Inglaterra'=>'Inglaterra',
			'Irlanda'=>'Irlanda',
			'Islândia'=>'Islândia',
			'Israel'=>'Israel',
			'Itália'=>'Itália',
			'Jamaica'=>'Jamaica',
			'Japão'=>'Japão',
			'Jordânia'=>'Jordânia',
			'Kuwait'=>'Kuwait',
			'Latvia'=>'Latvia',
			'Líbano'=>'Líbano',
			'Liechtenstein'=>'Liechtenstein',
			'Lituânia'=>'Lituânia',
			'Luxemburgo'=>'Luxemburgo',
			'Macau'=>'Macau',
			'Macedônia'=>'Macedônia',
			'Madagascar'=>'Madagascar',
			'Malásia'=>'Malásia',
			'Malaui'=>'Malaui',
			'Mali'=>'Mali',
			'Malta'=>'Malta',
			'Marrocos'=>'Marrocos',
			'Martinica'=>'Martinica',
			'Mauritânia'=>'Mauritânia',
			'Mauritius'=>'Mauritius',
			'México'=>'México',
			'Moldova'=>'Moldova',
			'Mônaco'=>'Mônaco',
			'Montserrat'=>'Montserrat',
			'Nepal'=>'Nepal',
			'Nicarágua'=>'Nicarágua',
			'Niger'=>'Niger',
			'Nigéria'=>'Nigéria',
			'Noruega'=>'Noruega',
			'Nova Caledônia'=>'Nova Caledônia',
			'Nova Zelândia'=>'Nova Zelândia',
			'Omã'=>'Omã',
			'Palau'=>'Palau',
			'Panamá'=>'Panamá',
			'Papua-nova Guiné'=>'Papua-nova Guiné',
			'Paquistão'=>'Paquistão',
			'Peru'=>'Peru',
			'Polinésia Francesa'=>'Polinésia Francesa',
			'Polônia'=>'Polônia',
			'Porto Rico'=>'Porto Rico',
			'Portugal'=>'Portugal',
			'Qatar'=>'Qatar',
			'Quênia'=>'Quênia',
			'Rep. Dominicana'=>'Rep. Dominicana',
			'Rep. Tcheca'=>'Rep. Tcheca',
			'Reunion'=>'Reunion',
			'Romênia'=>'Romênia',
			'Ruanda'=>'Ruanda',
			'Rússia'=>'Rússia',
			'Saipan'=>'Saipan',
			'Samoa Americana'=>'Samoa Americana',
			'Senegal'=>'Senegal',
			'Serra Leone'=>'Serra Leone',
			'Seychelles'=>'Seychelles',
			'Singapura'=>'Singapura',
			'Síria'=>'Síria',
			'Sri Lanka'=>'Sri Lanka',
			'St. Kitts & Nevis'=>'St. Kitts & Nevis',
			'St. Lúcia'=>'St. Lúcia',
			'St. Vincent'=>'St. Vincent',
			'Sudão'=>'Sudão',
			'Suécia'=>'Suécia',
			'Suiça'=>'Suiça',
			'Suriname'=>'Suriname',
			'Tailândia'=>'Tailândia',
			'Taiwan'=>'Taiwan',
			'Tanzânia'=>'Tanzânia',
			'Togo'=>'Togo',
			'Trinidad & Tobago'=>'Trinidad & Tobago',
			'Tunísia'=>'Tunísia',
			'Turquia'=>'Turquia',
			'Ucrânia'=>'Ucrânia',
			'Uganda'=>'Uganda',
			'Uruguai'=>'Uruguai',
			'Venezuela'=>'Venezuela',
			'Vietnã'=>'Vietnã',
			'Zaire'=>'Zaire',
			'Zâmbia'=>'Zâmbia',
			'Zimbábue'=>'Zimbábue',
		);
		return $paises;
	}




}


