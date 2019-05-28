<?php 
namespace Models;
class Product extends BaseModel
{
	
	public $tableName = "products";
	public function getCateName(){
		$cate = Category::where(["id", "=", $this->cate_id])
							->first();

		if($cate != null){
			return $cate->cate_name;
		}

		return null;
	}
}

 ?>