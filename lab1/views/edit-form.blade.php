<form action="" method="post">
	Tiêu đề <input type="text" name="title" value="{{$model->title}}">
	<br>
	Đường dẫn <input type="text" name="slug" value="{{$model->slug}}">
	<br>
	Từ khóa <input type="text" name="keywords" value="{{$model->keywords}}">
	<br>
	Mô tả 
	<textarea name="description">{{$model->desctiption}}</textarea>
	<br>
	Nội dung 
	<textarea name="content">{{$model->content}}</textarea>
	<br>
	Ảnh <input type="text" name="feature_image" value="{{$model->feature_image}}">
	<br>
	Lượt xem <input type="text" name="views" value="{{$model->views}}">
	<br>
	Danh mục 
	<select name="cate_id">
		@foreach ($cates as $el)
			<option 
			@if($model->cate_id == $el['id'])
			selected
			@endif
			value="{{$el['id']}}">{{$el['name']}}</option>	
		@endforeach
	</select>
	<br>
	<button type="submit">Lưu</button>
</form>