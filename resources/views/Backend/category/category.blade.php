@extends('Backend/master')
@section('title','Quản lý danh mục')
@section('main')

<form action="" method="GET" class="form-inline" role="form">
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
			<input type="text" class="form-control" name="search" placeholder="Nhập tên danh mục..." value="{{request()->search}}">
		</div>
		<button type="submit" class="btn btn-primary">
			<i class="glyphicon glyphicon-search"></i>
		</button>
		<a href="{{route('cat_add')}}" class="btn btn-success">Thêm mới</a>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên</th>
					<th>Trạng thái</th>
					<!-- <th>Type</th> -->
					<th>Xóa</th>
					<th>Sửa</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cates as $key=> $value)
				<tr>
					<td>{{ $cates->firstItem() + $key }}</td>
					<td>{{$value->name}}</td>
					<td>{{($value->status==1)?'Hiện':'Ẩn'}}</td>
					<!-- @if($value->type==1)
					<td>Tin sản phẩm</td>
					@else
					<td>Tin thể thao</td>
					@endif -->
					<td><a href="{{ route('cat_del',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa')"><i class="glyphicon glyphicon-trash"></i></a></td>
					<td><a href="{{ route('cat_edit',['id'=>$value->id])}}" ><i class="glyphicon glyphicon-edit"></i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="clearfix">
			{{$cates->appends(request()->only('search'))->links()}}
		</div>
	</div>
	@stop
		