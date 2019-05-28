<?php 

require_once './vendor/autoload.php';

use Mysql\Animal;
use MongoDB\Animal as MongoAnimal;

$duck = new MongoAnimal();
var_dump($duck);

 ?>