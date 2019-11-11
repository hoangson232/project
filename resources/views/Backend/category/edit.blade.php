@extends('Backend.master')
@section('title','Chỉnh sửa danh mục: '.$model->name)
@section('main')
<form action="" method="POST" role="form">
	@csrf
	<legend>Form edit</legend>

	<div class="form-group">
		<label for="">category new name</label>
		<input type="text" class="form-control" name="name" placeholder="Input name" value="{{$model->name}}" id="name">
	</div>
	<div class="form-group">
		<label for="">category new slug</label>
		<input type="text" class="form-control" name="slug" placeholder="Input name" value="{{$model->slug}}" id="slug">
	</div>
	<div class="form-group">
		<label for="">category new status</label>
		<div class="radio">
			<label>
				<input type="radio" name="status" id="input" value="0" {{(($model->status)==0)?'checked':''}}>
				Ẩn
			</label>
			
			<label>
				<input type="radio" name="status" id="input" value="1" {{(($model->status)==1)?'checked':''}}>
				Hiện
			</label>
			
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Save</button>
</form>
@stop
@section('js')

<script src="{{url('/public/admin')}}/js/slug.js"></script>

@stop()