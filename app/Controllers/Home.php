<?php 

namespace App\Controllers;

if (!defined('R4F500')) {
	header("Location: /");
	die('Erro:');
}


class Home
{
	
	public function index()
	{

		$carregarView = new \Core\ConfigView("Views/home/index");

		$carregarView->renderizar();

	}
}




 ?>