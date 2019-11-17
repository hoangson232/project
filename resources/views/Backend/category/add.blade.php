@extends('Backend.master')
@section('title','Thêm danh mục')
@section('main')
<form action="" method="POST" role="form">
	@csrf
	<legend>Thêm mới danh mục</legend>

	<div class="form-group">
		<label for="">Tên danh mục</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Input name">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Đường dẫn</label>
		<input type="text" class="form-control" name="slug" id="slug" placeholder="Input name">
		@if($errors->has('slug'))
		{{$errors->first('slug')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Trạng thái</label>
		<div class="radio">
			<label>
				<input type="radio" name="status" id="input" value="0">
				Ẩn
			</label>
			
			<label>
				<input type="radio" name="status" id="input" value="1" checked>
				Hiện
			</label>
			
		</div>
	</div>
	

	<button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()
@section('js')

<script src="{{url('/public/admin')}}/js/slug.js"></script>

@stop()