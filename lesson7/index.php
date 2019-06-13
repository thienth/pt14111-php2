<?php 
$str = "CA$%#sdfsdf";
$pattern = "/^([\w\D]+\s{1}[\w\D]{2,}\s{1}[\w\D]+)/";
echo "<pre>";
var_dump(preg_match($pattern, $str));



 ?>