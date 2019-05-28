<?php 
namespace Mysql;
use \PDO;
class Animal
{
	function __construct(){
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", "root", "123456"); 
	}
}

 ?>