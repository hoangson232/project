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
		{{-- <div class="form-group">
			<input type="text" class="form-control" name="comment_search" placeholder="Nhập tên người bình luận..." value="{{request()->pro_search}}">
		</div>	
		<button type="submit" class="btn btn-primary">
			<i class="glyphicon glyphicon-search"></i>
		</button> --}}
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
					<th>Xóa</th>
					{{-- <th>Trạng thái</th> --}}
					
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($comment as $key=> $value)
				<tr>
					<td>{{ $comment->firstItem() + $key }}</td>
					<td>{{$value->acc->name}}</td>
					<td>{{$value->pro->name}}</td>
					<td>{{$value->comment}}</td>
					<td>{{date_format($value->created_at,"d/m/Y H:i:s")}}</td>
					{{-- <td>{{($value->status==1)?'Hiện':'Ẩn'}}</td> --}}
					
					<td><a href="{{route('com_del',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa')"><i class="glyphicon glyphicon-trash"></i></a></td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="clearfix">
			{{$comment->appends(request()->only('search'))->links()}}
		</div>
	</div>
	@stop
		