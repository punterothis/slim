<?php
	define('__URL_BASE','/api/v1');
	define('__DIR_CONTROLLERS','classes/');
	$routes = array(
		array(
			'url' => '/cliente',
			'type' => array('get'),
			'controller' => 'clienteController'
		),
		array(
			'url' => '/reservas',
			'type' => array('get'),
			'controller' => 'reservasController'
		),
		array(
			'url' => '/reserva',
			'type' => array('get'),
			'controller' => 'reservaController'
		)
	);
?>
