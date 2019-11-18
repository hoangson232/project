@extends('backend.master')
@section('title','Thêm Banner')
@section('main')
<div class="row">
			<div class="col-md-12">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
		@csrf
			<div class="form-group">
				<label class="" for="">Tên Banner</label>
				<input type="text" class="form-control" id="" placeholder="Tên banner" name="name" value="{{$banners->name}}">
			</div>
			<div class="form-group">
				<label class="" for="">nội dung</label>
					<textarea name="content" class="form-control ckeditor" placeholder="content" id="content">{{$banners->content}}</textarea>
			</div>
			<div class="form-group">
				<label class="" for="">ảnh</label>
				<input type="file" name="image" value="{{$banners->image}}">
				<img src="{{url('')}}/uploads/banner/{{$banners->image}}" width="100px">
			</div>
			<div class="form-group">
					<label class="" for="">Trạng Thái</label>
					<br>
					<input type="radio" class=""  placeholder="status" name="status" value="0" {{($banners->status==0) ? 'checked' : ''}}> ẩn
					<input type="radio" class=""  placeholder="status" name="status" value="1" {{($banners->status==1)? 'checked' : ''}}> hiện
			</div>

		
			
		
			<button type="submit" class="btn btn-primary">Cập Nhập</button>
		</form>
		</div>
</div>
@stop