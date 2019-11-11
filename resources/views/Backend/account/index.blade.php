@extends('Backend/master')
@section('title','Quản lý Tài khoản')
@section('main')
<form action="" method="POST" class="form-inline" role="form">
	
		<div class="form-group">
			<label class="sr-only" for="">label</label>
			<input type="text" class="form-control" name="search" placeholder="Input keyword">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">
			<i class="glyphicon glyphicon-search"></i>
		</button>
		<a href="{{route('account_add')}}" class="btn btn-success">Add new</a>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($account as $value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->email}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->address}}</td>
					<td></td>
					<td><a href="{{ route('account_delete',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa')"><i class="glyphicon glyphicon-trash"></i></a>Delete</td>
					<td><a href="{{ route('account_edit',['id'=>$value->id])}}" ><i class="glyphicon glyphicon-edit"></i></a>Edit</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="clearfix">
			{{$account->links()}}
		</div>
	</div>
	@stop
		