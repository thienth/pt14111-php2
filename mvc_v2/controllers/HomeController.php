<?php 
namespace Controllers;

use Models\Product;
use Models\User;
class HomeController extends BaseController
{
	
	function index()
	{
		$products = Product::all();
		// var_dump($products); die;
		return $this->render('homepage', [
											'products' => $products
										]);
	}
	function productDetail($id)
	{
		$product = Product::find($id);
		return $this->render('product.chitiet', compact('product'));
	}
	public function loginForm(){
		
		return $this->render('login');
	}
	public function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = User::where('email', $email)->first();

		if(password_verify($password, $user->password)){
			$_SESSION['user'] = [
				'name' => $user->name,
				'email' => $user->email
			];
			header('location: http://localhost/pt14111/mvc');
		}else{
			return $this->render('login');
		}
	}
	public function logout(){
		unset($_SESSION['user']);
		header('location: http://localhost/pt14111/mvc');
		return false;
	}
}
 ?>