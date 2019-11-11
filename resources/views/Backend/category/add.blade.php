@extends('Backend.master')
@section('title','Thêm danh mục')
@section('main')
<form action="" method="POST" role="form">
	@csrf
	<legend>Form add new</legend>

	<div class="form-group">
		<label for="">category new name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Input name">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">category new slug</label>
		<input type="text" class="form-control" name="slug" id="slug" placeholder="Input name">
		@if($errors->has('slug'))
		{{$errors->first('slug')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">category new status</label>
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
<!-- 	<div class="form-group">
		<label for="">category new type</label>
		<div class="radio">
			<label>
				<input type="radio" name="type" id="input" value="0">
				Tin thể thao
			</label>
			
			<label>
				<input type="radio" name="type" id="input" value="1" >
				Tin thời sự
			</label>
			<label>
				<input type="radio" name="type" id="input" value="2" checked>
				Tin quốc tế
			</label>
		</div>
		
	</div>
 -->
	

	<button type="submit" class="btn btn-primary">Save</button>
</form>
@stop()
@section('js')

<script src="{{url('/public/admin')}}/js/slug.js"></script>

@stop()