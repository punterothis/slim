<?php
	require 'config/slim.php';
	require 'vendor/autoload.php';

	$app = new \Slim\Slim();
	$app->config('debug',true);
	$app->map(__URL_BASE.'/:id',function($id) use ($app,$routes){
		$controller = $id . 'Controller';
		$fileController = __DIR_CONTROLLERS . $controller . '.class.php';
		if (file_exists($fileController)){
			require_once $fileController;
			$obj = new $controller();	
		}
		else{
			$app->notFound();
		}
	})->via('GET');
	
	/*foreach($routes as $rout){
		$app->map($rout['url'],function(){
			require_once __DIR_CONTROLLERS . $rout['controller'] . ".class.php";
			$obj = new clienteController();
			//require_once "classes/" . $rout['controller'].'.class.php';
			//$obj = new $rout['controller']();
		})->via('GET');
	}*/

	$app->run();
?>
