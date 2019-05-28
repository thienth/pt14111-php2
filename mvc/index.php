<?php 

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

/**
 * https://github.com/PHPMailer/PHPMailer
 * https://github.com/jenssegers/blade
 * https://github.com/illuminate/database
 * https://github.com/mrjgreen/phroute
 */

require_once './vendor/autoload.php';
use Controllers\HomeController;
use Controllers\ProductController;
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