@extends('backend.master')
@section('title','Thêm Banner')
@section('main')
<div class="row">
			<div class="col-md-12">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
		@csrf
			<div class="form-group">
				<label class="" for="">Tên banner</label>
				<input type="text" class="form-control" id="" placeholder="Tên banner" name="name">
			</div>
			<div class="form-group">
				<label class="" for="">nội dung</label>
					<textarea name="content" class="form-control ckeditor" placeholder="content" id="content"></textarea>
			</div>
			<div class="form-group">
					<label class="" for="">Chọn ảnh</label>
					<input type="file" class="" id="" placeholder="" name="image">
			</div>
			<div class="form-group">
					<label class="" for="">Trạng Thái</label>
					<br>
					<input type="radio" class=""  placeholder="status" name="status" value="0"> ẩn
					<input type="radio" class=""  placeholder="status" name="status" value="1" checked> hiện
			</div>

		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
</div>
@stop