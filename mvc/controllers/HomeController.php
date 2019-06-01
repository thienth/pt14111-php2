<?php 
namespace Controllers;

use Models\Product;
class HomeController
{
	
	function index()
	{
		$products = Product::where('price', '>', 90000)
							->orWhere('price', '<', 1000)
							->orderBy('price', 'asc')
							->get();
		include_once './views/homepage.php';
	}
	function productDetail()
	{
		$product = Product::find($_GET['id']);
		include_once './views/chitiet.php';
	}
}
 ?>