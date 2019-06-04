<?php 
namespace Controllers;

use Models\Product;
class HomeController extends BaseController
{
	
	function index()
	{
		$products = Product::all();
		// var_dump($products); die;
		return $this->render('homepage', [
											'products' => $products
										]);
	}
	function productDetail($id)
	{
		$product = Product::find($id);
		return $this->render('product.chitiet', compact('product'));
	}
}
 ?>