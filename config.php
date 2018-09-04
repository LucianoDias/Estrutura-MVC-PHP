<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/Paginacao_mvc/");
	$config['dbname'] = 'loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'Loop';
	$config['dbpass'] = 'programar';
} else {
	define("BASE_URL", "http://localhost/projeto_popularselect/");
	$config['dbname'] = 'projeto_popularselect';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>