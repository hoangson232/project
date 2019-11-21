@extends('Backend/master')
@section('title','Quản lý sản phẩm')
@section('main')

<form action="" method="GET" class="form-inline" role="form" enctype="multipart/form-data">
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
			<input type="text" class="form-control" name="pro_search" placeholder="Nhập tên sản phẩm..." value="{{request()->pro_search}}">
		</div>	
		<button type="submit" class="btn btn-primary">
			<i class="glyphicon glyphicon-search"></i>
		</button>
		<a href="{{route('pro_add')}}" class="btn btn-success">Thêm mới</a>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên</th>
					<th>Hình ảnh</th>
					<th>Danh mục</th>
					<th>Miêu tả</th>
					<th>Trạng thái</th>
					<!-- <th>Type</th> -->
					<th>Xóa</th>
					<th>Sửa</th>
				</tr>
			</thead>
			<tbody>
				@foreach($product as $key=> $value)
				<tr>
					<td>{{ $product->firstItem() + $key }}</td>
					<td>{{$value->name}}</td>
					<td><img src="{{url('')}}/uploads/{{$value->image}}" alt="" width="50px"></td>
					<td>{{$value->category->name}}</td>
					<td>{{$value->description}}</td>
					<td>{{($value->status==1)?'Hiện':'Ẩn'}}</td>
					<!-- @if($value->type==1)
					<td>Tin sản phẩm</td>
					@else
					<td>Tin thể thao</td>
					@endif -->
					<td><a href="{{ route('pro_del',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa')"><i class="glyphicon glyphicon-trash"></i></a></td>
					<td><a href="{{ route('pro_edit',['id'=>$value->id])}}" ><i class="glyphicon glyphicon-edit"></i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="clearfix">
			{{$product->appends(request()->only('pro_search'))->links()}}
		</div>
	</div>
	@stop
		