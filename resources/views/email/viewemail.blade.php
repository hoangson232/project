<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Cám ơn {{$name}} đã đặt hàng của Lazada</h1>
	<h3>Mã đơn hàng: {{$id}}</h3>
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
				<td>{{$loop->index+1}}</td>
				<td>{{$value['name']}}</td>
				<td>{{$value['quantity']}}</td>
				<td>{{number_format($value['price'])}} Đ</td>
			</tr>
			@endforeach
	
		</tbody>
	</table>
	<h3>Tổng tiền: {{number_format($total_price)}} Đ</h3>
</body>
</html>