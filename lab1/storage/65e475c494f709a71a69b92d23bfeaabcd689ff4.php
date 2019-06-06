<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Tiêu đề</th>
				<th>Đường dẫn</th>
				<th>Từ khóa</th>
				<th>Ảnh</th>
				<th>Mô tả</th>
				<th>Lượt xem</th>
				<th>
					<a href="add" title="">Thêm mới</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $thienth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
			<tr>
				<td><?php echo e($item->id); ?></td>
				<td><?php echo e($item->title); ?></td>
				<td><?php echo e($item->slug); ?></td>
				<td><?php echo e($item->keywords); ?></td>
				<td>
					<img src="<?php echo e($item->feature_image); ?>" width="100">
				</td>
				<td><?php echo e($item->description); ?></td>
				<td><?php echo e($item->views); ?></td>
				<td>
					<a href="edit/<?php echo e($item->id); ?>" title="">Sửa</a>
					<a href="remove/<?php echo e($item->id); ?>" title="">Xóa</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	
</body>
</html><?php /**PATH /Library/WebServer/Documents/pt14111/lab1/views/homepage.blade.php ENDPATH**/ ?>