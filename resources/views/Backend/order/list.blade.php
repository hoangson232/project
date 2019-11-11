@extends('Backend/master')
@section('title','Quản lý đơn hàng')
@section('main')
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã đơn hàng</th>
					<th>Tên khách hàng</th>
					<th>Ngày đặt</th>
					<th>Trạng thái</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $value)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$value->id}}</td>
					<td>{{$value->us->name}}</td>
					<td>{{$value->created_at}}</td>
					@if($value->status==1)
					<td>Đã duyệt</td>
					@elseif($value->status==2)
					<td>Đã giao hàng</td>
					@elseif($value->status==3)
					<td>Hủy</td>
					@else
					<td>Chưa duyệt</td>
					@endif
					<td>
						<a href="{{ route('order_detail',['id'=>$value->id])}}" class="btn btn-info">Xem chi tiết</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
	@stop
		