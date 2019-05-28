<?php 
namespace Controllers;

use Models\Product;
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