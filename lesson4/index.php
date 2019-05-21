<?php 
class Base {

	function getStaticVar(){
		return static::$tablename;
	}

	public static function xxx(){
		$model = new static();
		return $model;
	}
}

class Product extends Base{
	public $status = 2;
	public static $tablename = 'products';
	const ACTIVE_STATUS = 1;

}

class Invoice extends Base{

	const ACTIVE_STATUS = 3;
	public static $tablename = 'invoices';
	

}


// $x = new Product();
// echo $x->status;

// echo "<br>";
// echo Product::ACTIVE_STATUS;
// echo "<br>";
// echo Product::$tablename;
// echo "<br>";
// echo $x->getStaticVar();
// 
$y = Product::xxx();
$x = Invoice::xxx();
var_dump($y, $x);


// echo Invoice::ACTIVE_STATUS;
 ?>