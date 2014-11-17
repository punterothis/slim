<?php
	define('__URL_BASE','/api/v1');
	define('__DIR_CONTROLLERS','classes/');
	$routes = array(
		'cliente' => array(
			'url' => '/cliente',
			'controller' => 'clienteController',
			'get' => 'getCliente',
			'post' => 'saveCliente',
		),
		'reservas' => array(
			'url' => '/reservas',
			'controller' => 'reservasController'
		),
		'reserva' => array(
			'url' => '/reserva',
			'controller' => 'reservaController'
		)
	);
?>
