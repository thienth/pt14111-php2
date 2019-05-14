<?php 
// tạo ra 1 kiểu dữ liệu/Object mới
class Animal{}

// tạo ra 1 biến/cá thể thuộc kiểu dữ liệu Animal
$duck = new Animal();


class Laptop{

	// tạo ra các thuộc tính chung cho đối tượng
	// var $model;
	// var $price;
	// var $color;
	function getInfo(){
		echo "Model name: " . $this->model . "<br>";
		echo "Price: " . $this->price . "<br>";
		echo "Color: " . $this->color . "<br>";
		echo "done!<br>";
	}

	function test(){}

	function changeColor($newColor){
		$this->color = $newColor;
		$this->getInfo();
	}
}


$hp = new Laptop();
$hp->model = 'hp luxury D400';
$hp->price = 2500;
$hp->color = 'green';

$asus = new Laptop();
$asus->model = 'F1280';
$asus->price = 1500;
$asus->color = 'blue';

// var_dump($hp, $asus);
$hp->getInfo();
// $asus->getInfo();
// 
$hp->changeColor('red');
	
$asus->getInfo();
$asus->changeColor('grey');	
 ?>
