<form action="" method="post">
	Tiêu đề <input type="text" name="title" value="<?php echo e($model->title); ?>">
	<br>
	Đường dẫn <input type="text" name="slug" value="<?php echo e($model->slug); ?>">
	<br>
	Từ khóa <input type="text" name="keywords" value="<?php echo e($model->keywords); ?>">
	<br>
	Mô tả 
	<textarea name="description"><?php echo e($model->desctiption); ?></textarea>
	<br>
	Nội dung 
	<textarea name="content"><?php echo e($model->content); ?></textarea>
	<br>
	Ảnh <input type="text" name="feature_image" value="<?php echo e($model->feature_image); ?>">
	<br>
	Lượt xem <input type="text" name="views" value="<?php echo e($model->views); ?>">
	<br>
	Danh mục 
	<select name="cate_id">
		<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option 
			<?php if($model->cate_id == $el['id']): ?>
			selected
			<?php endif; ?>
			value="<?php echo e($el['id']); ?>"><?php echo e($el['name']); ?></option>	
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>
	<br>
	<button type="submit">Lưu</button>
</form><?php /**PATH /Library/WebServer/Documents/pt14111/lab1/views/edit-form.blade.php ENDPATH**/ ?>