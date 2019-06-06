<?php 
namespace Controllers;

use Models\Post;
class HomeController extends BaseController
{
	
	function index()
	{
		$posts = Post::all();
		return $this->render('homepage', [
											'thienth' => $posts
										]);
	}
	function remove($id)
	{
		Post::destroy($id);
		header('location: http://localhost/pt14111/lab1/');
	}

	function edit($id)
	{
		$model = Post::find($id);
		$cates = $_SESSION['CATEGORIES'];
		return $this->render('edit-form', [
											'cates' => $cates,
											'model' => $model
										]);
	}

	function add()
	{
		$cates = $_SESSION['CATEGORIES'];
		return $this->render('add-form', [
											'cates' => $cates
										]);
	}

	function saveAdd()
	{
		$model = new Post();
		$model->title = $_POST['title'];
		$model->slug = $_POST['slug'];
		$model->keywords = $_POST['keywords'];
		$model->description = $_POST['description'];
		$model->content = $_POST['content'];
		$model->feature_image = $_POST['feature_image'];
		$model->views = $_POST['views'];
		$model->cate_id = $_POST['cate_id'];
		$model->save();
		header('location: http://localhost/pt14111/lab1/');

	}

	function saveEdit($id)
	{
		$model = Post::find($id);
		$model->title = $_POST['title'];
		$model->slug = $_POST['slug'];
		$model->keywords = $_POST['keywords'];
		$model->description = $_POST['description'];
		$model->content = $_POST['content'];
		$model->feature_image = $_POST['feature_image'];
		$model->views = $_POST['views'];
		$model->cate_id = $_POST['cate_id'];
		$model->save();
		header('location: http://localhost/pt14111/lab1/');

	}
	
}
 ?>