<?php 
namespace Controllers;
class ProductController
{
	
	function listProduct()
	{
		echo "trang danh sach san pham";
	}
	function addForm()
	{
		echo "trang giao dien them san pham";
	}
	function saveAdd($id, $name = 'Khai hoc dot')
	{
		echo "id = $id <br> name = $name <br> school = " . $_GET['school'];
	}
}
 ?>