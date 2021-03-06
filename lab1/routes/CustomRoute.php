<?php 
namespace Routes;

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
class CustomRoute
{
	public static function init($url){
		$router = new RouteCollector();


		$router->get('/', ['Controllers\HomeController', "index"]);
		$router->get('/remove/{id}', ['Controllers\HomeController', "remove"]);
		$router->get('/edit/{id}', ['Controllers\HomeController', "edit"]);
		$router->post('/edit/{id}', ['Controllers\HomeController', "saveEdit"]);
		$router->get('/add', ['Controllers\HomeController', "add"]);
		$router->post('/add', ['Controllers\HomeController', "saveAdd"]);


		$dispatcher = new Dispatcher($router->getData());

		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		// Print out the value returned from the dispatched function
		echo $response;
	}
	
}

 ?>