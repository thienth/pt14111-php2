<?php 
namespace Controllers;

require_once './models/Product.php';
class HomeController
{
	
	function index()
	{
		$products = Product::all();
		include_once './views/homepage.php';
	}
	function productDetail()
	{

		$product = Product::where(['id', '=', $_GET['id']])
							->first();
		include_once './views/chitiet.php';
	}
}
 ?>