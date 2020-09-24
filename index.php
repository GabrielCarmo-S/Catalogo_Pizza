<?php 

ob_start();

define('R4F500', true);

require './vendor/autoload.php';

$url = new Core\ConfigController();

$url->carregar();

?>
