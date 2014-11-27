<?php
	require 'config/slim.php';
	require 'vendor/autoload.php';

	$app = new \Slim\Slim();
    $app->config('debug',true);
    //$app->response->headers->set('Content-Type', 'application/json');
    $app->options('/(:name+)', function() use ($app) {
      $response = $app->response();
      $response->header('Access-Control-Allow-Origin', '*'); //Allow JSON data to be consumed
      $response->header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, x-http-method-override, content-type, Accept, X-authentication, X-client'); //Allow JSON data to be consumed
      $response->header('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS'); //Allow JSON data to be consumed
      $response->header('Content-Type', 'application/json');
    });
	$app->map(__URL_BASE.'/:id',function($id = 'def') use ($app,$routes){
		$controller = $id . 'Controller';
		$fileController = __DIR_CONTROLLERS . $controller . '.class.php';
		if (file_exists($fileController)){
			require_once $fileController;
            $obj = new $controller();	
            $response = $app->response();
            $response->header('Access-Control-Allow-Origin', '*');
            $response->header('Content-Type', 'application/json');
            $response->write($obj->getResponse());
            //$app->notFound();

		}
		else{
			$app->notFound();
		}
	})->via('GET','POST');
	
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
