<?php 

namespace Core;

if (!defined('R4F500')) {
	header("Location: /");
	die('Erro:');
}

class ConfigView
{
	
	private string $nome;
	private $dados;

	public function __construct($nome)
	{
		$this->nome = $nome;
	}

	public function renderizar(){
		if (file_exists('app/' . $this->nome . '.php')) {

			include 'app/' . $this->nome . '.php';

		} else {
			echo "Erro ao carregar pagina <br>";
			echo "Erro ao carregar View : {$this->nome} <br>";
		}
	}

}







 ?>