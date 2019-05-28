<?php 

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';
require_once './models/BaseModel.php';
require_once './models/Product.php';
require_once './models/Category.php';
require_once './models/User.php';

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
		echo "404 - not found!";
		break;
}

 ?>