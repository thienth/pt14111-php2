<?php 
class Product{
	// dinh nghia ra ham khoi tao
	function __construct(){
		// thực thi ngay lập tức khi new Object()
		// tham số $ipId, $ipName, $ipPrice sẽ nhận các giá trị đc truyền vào khi new Object($ts1, $ts2, $ts3)
		$this->tableName = "products";

		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
			"root",
			"123456");
	}
	function getAll(){
		$sql = "select * from " . $this->tableName;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	static function all(){
		$model = new Product();
		$sql = "select * from " . $model->tableName;
		$stmt = $model->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	static function where($col, $con, $val){
		$model = new Product();
		$model->queryBuilder = "select * from ". $model->tableName;
		$model->queryBuilder .= " where $col $con '$val'";
		return $model;
	}

	function get(){
		$stmt = $this->conn->prepare($this->queryBuilder);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
// $casio = new Product();

// var_dump($casio->getAll());

// var_dump(Product::all());
$products = Product::where('name', 'like', '%Mr%')->get();
var_dump($products);



 ?>