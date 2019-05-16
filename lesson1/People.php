<?php 

class BaseModel{

	public function find(){
		$model = new static();

		return $model;
	}
}

class Animal extends BaseModel{

}

class Duck extends BaseModel{

}

$thien = Duck::find();
$minh = Animal::find();
var_dump($minh, $thien);


 ?>