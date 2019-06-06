<form action="" method="post">
	Tiêu đề <input type="text" name="title">
	<br>
	Đường dẫn <input type="text" name="slug">
	<br>
	Từ khóa <input type="text" name="keywords">
	<br>
	Mô tả 
	<textarea name="description"></textarea>
	<br>
	Nội dung 
	<textarea name="content"></textarea>
	<br>
	Ảnh <input type="text" name="feature_image">
	<br>
	Lượt xem <input type="text" name="views">
	<br>
	Danh mục 
	<select name="cate_id">
		<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($el['id']); ?>"><?php echo e($el['name']); ?></option>	
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>
	<br>
	<button type="submit">Lưu</button>
</form><?php /**PATH /Library/WebServer/Documents/pt14111/lab1/views/add-form.blade.php ENDPATH**/ ?>