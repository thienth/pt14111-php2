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
		<tbody>
			@foreach ($products as $key => $item)
				
			<tr>
				<td>{{$item->id}}</td>
				<td>
					<a href="detail/{{$item->id}}" title="">{{ $item->name}}</a>
				</td>
				<td>{{ $item->price}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>