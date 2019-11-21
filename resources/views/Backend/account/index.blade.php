@extends('Backend/master')
@section('title','Quản lý Tài khoản')
@section('main')

<form action="" method="GET" class="form-inline" role="form">	
	@if(session('mess'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{session('mess')}}</strong>
	</div>
	@endif
	@if(session('error'))
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{session('error')}}</strong>
	</div>
	@endif
		<div class="form-group">			
			<input type="text" class="form-control" name="account_search" placeholder="Nhập tên/SĐT/email..." value="{{request()->account_search}}">
		</div>
		<button type="submit" class="btn btn-primary">
			<i class="glyphicon glyphicon-search"></i>
		</button>
		<a href="{{route('account_add')}}" class="btn btn-success">Add new</a>
	</form>
	<div class="table-responsive">
		@if($req->account_search)
		<p>Đã tìm thấy {{$acc_count}} tài khoản phù hợp</p>
		@endif
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>ID</th>
					<th>Tên</th>
					<th>Email</th>
					<th>Điện thoại</th>
					<th>Địa chỉ</th>
					
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($account as $key => $value)
				<tr>
					<td>{{ $account->firstItem() + $key }}</td>
					<td>{{$value->id}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->email}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->address}}</td>
					<td></td>
					<td><a href="{{ route('account_delete',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa')"><i class="glyphicon glyphicon-trash"></i></a>Delete</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="clearfix">
			{{$account->links()}}
		</div>
	</div>
	@stop
		