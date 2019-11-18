@extends('backend.master')
@section('title','Danh sách tin tức')
@section('main')
		<div class="row">
			@if(session('bl'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{session('bl')}}</strong> 
		</div>
		@endif
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên</th>
								
								<th>ảnh</th>
								<th>nội dung</th>
								<th>nội dung ceo</th>
								<th>status</th>
								<th>Ngày Tạo</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($blog as $log)
							<tr>
								<td>{{$loop->index+1}}</td>
								<td>{{$log->name}}</td>
								
								<td><img src="{{url('')}}/uploads/blog/{{$log->image}}" width="100px"></td>
								<td>{{$log->content}}</td>
								<td>{{$log->short_content}}</td>
								<td>{{($log->status)==1?'Hiện':'Ẩn'}}</td>
								<td>{{$log->created_at}}</td>
								<td><a href="{{route('edit-blog',['id'=>$log->id])}}" class="btn btn-success">Sửa</a></td>
							<td><a href="{{route('delete-blog',['id'=>$log->id])}}" class="btn btn-danger" onclick="return confirm('bạn có chắc muốn xóa không');">Xóa</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
						<div class="clearfix"></div>
				{{$blog->links()}}
				</div>
			</div>
		</div>
@stop