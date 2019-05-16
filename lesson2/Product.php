<?php 
class Product{

	// dinh nghia ra ham khoi tao
	function __construct(){
		// thực thi ngay lập tức khi new Object()
		// tham số $ipId, $ipName, $ipPrice sẽ nhận các giá trị đc truyền vào khi new Object($ts1, $ts2, $ts3)

		$this->conn = new PDO("mysql:host=127.0.0.1;dbnam=kaopiz;charset=utf8",
			"root",
			"123456");
	}

	function getInfo(){
		echo "<h2>" . $this->name . "</h2>";
		echo "<p>Gía: " . $this->price . "</p>";
	}
}



$casio = new Product();

// $casio->getInfo();

var_dump($casio);



 ?>