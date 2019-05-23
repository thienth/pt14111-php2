<?php 

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';

switch ($url) {
	case '/':
		$ctr = new HomeController();
		$ctr->index();
		break;
	case 'chi-tiet':
		$ctr = new HomeController();
		$ctr->productDetail();
		break;
	case 'admin/products':
		$ctr = new ProductController();
		$ctr->listProduct();
		break;
	case 'admin/add-product':
		$ctr = new ProductController();
		$ctr->addForm();
		break;
	case 'admin/save-add-product':
		$ctr = new ProductController();
		$ctr->saveAdd();
		break;
	
	default:
		# code...
		break;
}

 ?>