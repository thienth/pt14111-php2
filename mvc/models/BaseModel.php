<?php 
class BaseModel{
	function __construct(){
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
			"root",
			"123456");
	}

	function all(){
		$this->queryBuilder = "select * from " . $this->tableName;

		$stmt = $this->conn->prepare($this->queryBuilder);
		$stmt->execute();
		return $stmt->fetchAll();

	}

	function where($columnName, $condition, $value){
		
	}
}


 ?>