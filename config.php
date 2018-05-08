<?php

define('versao', 'dsv'); // Alterar para 'prd' quando for colocar em produção.

define('URL', 'http://localhost/entregas_NSI'); // Sempre alterar quando iniciar novo projeto.

global $config;

	$config = array();

	if (versao == 'dsv') {
		$config['versao'] = 'dsv';
		$config['dbname'] = 'nsi';
		$config['host']   = 'localhost';
		$config['user']   = 'root';
		$config['pass']   = '';
	} 

	if (versao == 'prd') {
		$config['versao'] = 'prd';
		$config['dbname'] = '';
		$config['host']   = '';
		$config['user']   = '';
		$config['pass']   = '';
	}

?>