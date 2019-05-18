<?php 
class NhanVien{
	public $ten;
	protected $diachi;
	private $email;


	function setTen($name){
		$this->ten = $name;
	}

	function getTen(){
		echo $this->ten;
	}

	function setDiaChi($add){
		$this->diachi = $add;
	}

	function getDiaChi(){
		echo $this->diachi;
	}

	

	public function hienthithongtin(){
		echo "Em la nhan vien";
	}

	private function nhapthongtin(){

	}
}

class BaoVe extends NhanVien{
	private $email;
	// function setEmail($email){
	// 	$this->email = $email;
	// }

	// function getEmail(){
	// 	echo $this->email;
	// }

	function hienthithongtin(){
		echo "Em la nhan vien - bao ve";
	}
}

$linh = new BaoVe();
$linh->setTen("Lưu Thị Thùy Linh dep trai that");
// echo $linh->getTen();
$linh->setDiaChi('16 dong quan');
// $linh->getDiaChi();
// $linh->setEmail('linhcoi@gmail.com');
// $linh->getEmail();

$linh->email = "xxx@gmail.com";
echo $linh->email;



 ?>