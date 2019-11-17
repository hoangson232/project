@extends('Backend/master')
@section('title','Quản lý bình luận')
@section('main')

<form action="" method="GET" class="form-inline" role="form" enctype="multipart/form-data">
	@if(session('mes'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{session('mes')}}</strong>
	</div>
	@endif
	@if(session('error'))
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{session('error')}}</strong>
	</div>
	@endif
		<div class="form-group">
			<input type="text" class="form-control" name="pro_search" placeholder="Nhập tên sản phẩm..." value="{{request()->pro_search}}">
		</div>	
		<button type="submit" class="btn btn-primary">
			<i class="glyphicon glyphicon-search"></i>
		</button>
		<a href="{{route('pro_add')}}" class="btn btn-success">Add new</a>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Người bình luận</th>
					<th>Sản phẩm</th>
					<th>Nội dung</th>
					<th>Ngày đăng</th>
					<th>Trạng thái</th>
					<!-- <th>Type</th> -->
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($comment as $value)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$value->acc->name}}</td>
					<td>{{$value->pro->name}}</td>
					<td>{{$value->comment}}</td>
					<td>{{$value->created_at}}</td>
					<td>{{($value->status==1)?'Hiện':'Ẩn'}}</td>
					<!-- @if($value->type==1)
					<td>Tin sản phẩm</td>
					@else
					<td>Tin thể thao</td>
					@endif -->
					<td><a href="{{route('com_del',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa')"><i class="glyphicon glyphicon-trash"></i></a>Delete</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="clearfix">
			{{$comment->appends(request()->only('search'))->links()}}
		</div>
	</div>
	@stop
		