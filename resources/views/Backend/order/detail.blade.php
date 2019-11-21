@extends('Backend/master')
@section('title','Chi tiết đơn hàng')
@section('main')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Thông tin người nhận hàng</h3>
				</div>
				<div class="panel-body">
					<p>Họ tên người nhận: {{$order->name}}</p>
					<p>Địa chỉ nhận: {{$order->address}}</p>
					<p>SĐT: {{$order->phone}}</p>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Cập nhật trạng thái đơn hàng</h3>
				</div>
				<form action="{{route('order_update')}}" method="POST" class="form-inline" role="form">
				@csrf
					<input type="hidden" name="id" value="{{$order->id}}">
					<select name="status">
						@if($order->status==1)
						<option value="1" {{($order->status==1)?'selected':''}}>Đã duyệt</option>
						<option value="2" {{($order->status==2)?'selected':''}}>Đã Giao hàng</option>
						<option value="3" {{($order->status==3)?'selected':''}}>Hủy</option>
						@elseif($order->status==2)
						<option value="2" {{($order->status==2)?'selected':''}}>Đã Giao hàng</option>
						@else
						<option value="0" {{($order->status==0)?'selected':''}}>Chưa duyệt</option>
						<option value="1" {{($order->status==1)?'selected':''}}>Đã duyệt</option>
						<option value="2" {{($order->status==2)?'selected':''}}>Đã Giao hàng</option>
						<option value="3" {{($order->status==3)?'selected':''}}>Hủy</option>
						@endif
					</select>
					<button type="submit" class="btn btn-primary">Cập nhật</button>
				</form>
			</div>
		</div>
		<div class="col-md-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Danh sách sản phẩm</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tên sản phẩm</th>
									<th>Hình ảnh</th>
									<th>Số lượng</th>
									<th>Đơn giá</th>
								</tr>
							</thead>
							<tbody>
								@foreach($order->detail as $value)
								<tr>
									<td>{{$loop->index+1}}</td>
									<td>{{$value->pro->name}}</td>
									<td><img src="{{url('')}}/uploads/{{$value->pro->image}}" alt="" width="50px"></td>
									<td>{{$value->price}}</td>
									<td>{{$value->quantity}}</td>
								</tr>
								@endforeach
								<tr>
									<td>TỔNG TIỀN</td>
									<td></td>
									<td></td>
									<td>{{$order->total_price}} VNĐ</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
		