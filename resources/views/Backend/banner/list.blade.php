@extends('backend.master')
@section('title','Danh Sách Banner')
@section('main')
		<div class="row">
			@if(session('bn'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{session('bn')}}</strong> 
		</div>
		@endif
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>stt</th>
								<th>Tên</th>
								<th>ảnh</th>
								<th>Nội Dung</th>
								<th>Ngày Tạo</th>
								<th>Trạng Thái</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($banner as $bn)
							<tr>
								<td>{{$loop->index+1}}</td>
								<td>{{$bn->name}}</td>
								<td><img src="{{url('')}}/uploads/banner/{{$bn->image}}" width="100px"></td>
								<td>{{$bn->content}}</td>
								<td>{{date('d/m/Y H:i',strtotime($bn->created_at))}}</td>
								@if($bn->status==0)
								<td>ẩn</td>
								@else
								<td>hiện</td>
								@endif
								<td><a href="{{route('edit-banner',['id'=>$bn->id])}}" class="btn btn-success">Sửa</a></td>
							<td><a href="{{route('delete-banner',['id'=>$bn->id])}}" class="btn btn-danger" onclick="return confirm('bạn có chắc muốn xóa không');">xóa</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
						<div class="clearfix"></div>
				{{$banner->links()}}
				</div>
			</div>
		</div>
@stop