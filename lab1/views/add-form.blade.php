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
		@foreach ($cates as $el)
			<option value="{{$el['id']}}">{{$el['name']}}</option>	
		@endforeach
	</select>
	<br>
	<button type="submit">Lưu</button>
</form>