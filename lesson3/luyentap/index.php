<?php 
require_once './models/Product.php';
require_once './models/Category.php';

$productModel = new Product();
$products = $productModel->all();

$categoryModel = new Category();
$categories = $categoryModel->where('name', 'like', '%a%');

var_dump($categories);

 ?>