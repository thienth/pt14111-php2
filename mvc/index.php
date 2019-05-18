<?php 
require_once './models/Product.php';
require_once './models/User.php';
require_once './models/Category.php';


$userModel = new User();
$productModel = new Product();
$cateModel = new Category();

// $users = $userModel->all();
// $products = $productModel->all();
// $cates = $cateModel->all();
// 
// lam the nao viet noi dung ham where tai BaseModel de thuc thi cau lenh select * from products where name like "%mr%"
$products = $productModel->where("name", "like", "%mr%");
$products = $productModel->where("id", ">", "10");
// var_dump($users);die;
var_dump($cates);die;


 ?>