<?php 
session_start();

$_SESSION['CATEGORIES'] = [
	[
		"id" => 1,
		"name" => "Sức khỏe"
	],
	[
		"id" => 2,
		"name" => "Làm đẹp"
	],
	[
		"id" => 3,
		"name" => "Thể Thao"
	],
	[
		"id" => 4,
		"name" => "Văn Hóa"
	],
	[
		"id" => 5,
		"name" => "Giáo dục"
	]
];
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

/**
 * https://github.com/PHPMailer/PHPMailer
 * https://github.com/jenssegers/blade
 * https://github.com/illuminate/database
 * https://github.com/mrjgreen/phroute
 */

require_once './bootstrap.php';
use Routes\CustomRoute;
CustomRoute::init($url);

 ?>