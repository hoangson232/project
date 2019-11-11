<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Cám ơn quý khách đã đặt hàng của Lazada</h1>
	<table>
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Giá</th>
			</tr>
		</thead>
		<tbody>
			@foreach($carts->items as $value)
			<tr>
				<td>1</td>
				<td>{{$value['name']}}</td>
				<td>{{$value['quantity']}}</td>
				<td>{{$value['price']}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>