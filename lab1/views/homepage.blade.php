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
			@foreach ($thienth as $key => $item)
				
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->title}}</td>
				<td>{{$item->slug}}</td>
				<td>{{$item->keywords}}</td>
				<td>
					<img src="{{$item->feature_image}}" width="100">
				</td>
				<td>{{$item->description}}</td>
				<td>{{$item->views}}</td>
				<td>
					<a href="edit/{{$item->id}}" title="">Sửa</a>
					<a href="remove/{{$item->id}}" title="">Xóa</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>