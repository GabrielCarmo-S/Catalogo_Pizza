<?php 

namespace Core;


if (!defined('R4F500')) {
	header("Location: /");
	die('Erro:');
}


class ConfigController
{
	private string $url;

	public	function __construct()
	{
		if(!empty(filter_input(INPUT_GET,"url", FILTER_DEFAULT))){

			$this->url = filter_input(INPUT_GET,"url", FILTER_DEFAULT);
		}else{
			$this->url = "home";
		}
		

		
	}

	public function carregar() {
		$this->config();
		$urlController = ucwords($this->url);

		$classe = "App\\Controllers\\" . $this->url;
		$classeCarregar = new $classe;
		$classeCarregar->index();
	}

	private function config(){

		define('URL', 'http://localhost/catalogo_pizza/');

	}


}




?>