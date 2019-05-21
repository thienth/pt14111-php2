<?php 
require_once './models/Product.php';
require_once './models/User.php';
require_once './models/Category.php';


// $products = Product::where('name', 'like', '%x%')
// 					->andWhere('price', '>', 10000)
// 					->get();
// var_dump($users);die;
$products = Product::all();
// var_dump($products);die;


 ?>
 <table>
 	<thead>
 		<tr>
 			<th>Name</th>
 			<th>Image</th>
 			<th>Cate name</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($products as $key => $item): ?>
 			
 		<tr>
 			<td><?= $item->name?></td>
 			<td>
 				<img src="<?= $item->image?>" width="80">
 			</td>
 			<td><?= $item->getCateName()?></td>
 		</tr>
 		<?php endforeach ?>
 	</tbody>
 </table>