<?php 

namespace App\Models;


if (!defined('R4F500')) {
	header("Location: /");
	die('Erro:');
}

use PDO;

class Conn
{
	
	private string $db = "mysql";
	private string $host = "localhost";
	private string $user = "root";
	private string $pass = "";
	private string $dbname = "perien";
	private int $port = 3306;
	private object $connect;


	protected function connect(){

		try {

			 $this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
			
			return $this->connect;
			
		} catch (Exception $ex) {
			die('Erro: Por favor tente novamente');
		}

	}


}


 ?>