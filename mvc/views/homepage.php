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
			<?php foreach ($products as $key => $item): ?>
				
			<tr>
				<td>
					<a href="chi-tiet?id=<?= $item->id?>" title=""><?= $item->name?></a>
				</td>
				<td><?= $item->price?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	
</body>
</html>