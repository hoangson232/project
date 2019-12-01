@extends('Backend/master')
@section('title','Quản lý đơn hàng')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">
			<form action="" method="GET" class="form-inline" role="form">
			
				<div class="form-group">
					<input type="date" class="form-control" id="" placeholder="Input field" name="date_from" value="{{request()->date_from}}">
				</div>
				<div class="form-group">
					<input type="date" class="form-control" id="" placeholder="Input field" name="date_to" value="{{request()->date_to}}">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="order_search" placeholder="Nhập tên khách/mã đơn..." value="{{request()->order_search}}">
				</div>
				
			
				<button type="submit" class="btn btn-primary">Lọc</button>
				
			</form>
		</h3>
	</div>
	<div class="panel-body">
		<div>
					<h4>Đã tìm thấy {{$order_count}} đơn hàng
					@if($date_from !='' && $date_to !='')
					<span>từ ngày {{$date_from}} đến ngày {{$date_to}}</span>
					@endif
					@if($req->order_search !='')
					<span>có khách hàng có mã đơn/tên là "{{$req->order_search}}"</span>
					@endif
					</h4>
				</div>
		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã đơn hàng</th>
					<th>Tên khách hàng</th>
					<th>Ngày đặt</th>
					<th>Tổng tiền</th>
					<th>Trạng thái</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $key=> $value)
				<tr>
					<td> {{ $loop->index+1}}</td>
					<td>{{$value->id}}</td>
					<td>{{$value->us->name}}</td>
					<td>{{date_format($value->created_at,"d/m/Y H:i:s")}}</td>
					<td>{{number_format($value->total_price)}} VND</td>
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
		{{-- <div class="clearfix">
			
			{{$orders->appends(request()->all())->links()}}
		</div> --}}
	</div>
	</div>
</div>

	
	@stop
		