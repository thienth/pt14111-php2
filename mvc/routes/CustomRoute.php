<?php 
namespace Routes;

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
class CustomRoute
{
	public static function init($url){
		$router = new RouteCollector();


		$router->get('/', ['Controllers\HomeController', "index"]);
		$router->get('/detail/{id}', ['Controllers\HomeController', "productDetail"]);

		$router->get('/remove/{id}/{name}?', ["Controllers\ProductController", "saveAdd"]);

		$dispatcher = new Dispatcher($router->getData());

		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		// Print out the value returned from the dispatched function
		echo $response;
	}
	
}

 ?>