@extends('Backend.master')
@section('title','Cập nhật sản phẩm')
@section('main')
<form action="" method="POST" role="form" enctype="multipart/form-data">
	@csrf


	<div class="form-group">
		<label for="">Tên sản phẩm</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Input name" value="{{$pro->name}}">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Chọn danh mục</label>
		<select name="category_id">
			@foreach($cate as $value)
			<option value="{{$value->id}}" {{($value->id==$pro->category_id)?'selected':''}}>{{$value->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Đường dẫn</label>
		<input type="text" class="form-control" name="slug" id="slug" placeholder="Input name" value="{{$pro->slug}}">
		@if($errors->has('slug'))
		{{$errors->first('slug')}}
		@endif
	</div>

		<div class="form-group">
		<label for="">Chọn ảnh</label>
		<input type="file" name="image">
		<img src="{{url('')}}/uploads/{{$pro->image}}" alt="" width="100px">
	</div>

	<div class="form-group">
		<label for="">Chọn nhóm ảnh</label>
		<input type="file" class="form-control" name="images[]" multiple="multiple">

			<!--=======  single image  =======-->
		
			
			<div class="single-image">
				@foreach($imgPro as $img)
				<img src="{{url('')}}/uploads/{{$img->link}}" class="img-fluid" alt="" width="100px">
				@endforeach
			</div>
			
			<!--=======  End of single image  =======-->
										
	</div>

	<div class="form-group">
		<label for="">Giá sản phẩm</label>
		<input type="text" class="form-control" name="price" id="" placeholder="Input name" value="{{$pro->price}}">
		@if($errors->has('price'))
		{{$errors->first('price')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Giá khuyến mãi</label>
		<input type="text" class="form-control" name="sale_price" id="" placeholder="Input name" value="{{$pro->sale_price}}">
		@if($errors->has('sale_price'))
		{{$errors->first('sale_price')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Miêu tả sản phẩm</label>
		<textarea name="description" id="content" class="form-control">{{$pro->description}}</textarea>

	</div>
	<div class="form-group">
		<label for="">Trạng thái</label>
		<div class="radio">
			<label>
				<input type="radio" name="status" id="input" value="0" {{($pro->status==0)?'checked':''}}>
				Ẩn
			</label>
			
			<label>
				<input type="radio" name="status" id="input" value="1" {{($pro->status==1)?'checked':''}}>
				Hiện
			</label>
			
		</div>
	</div>
	

	<button type="submit" class="btn btn-primary">Save</button>
</form>
@stop()
@section('js')

<script src="{{url('/public/admin')}}/js/slug.js"></script>
<script src="{{url('/public/admin')}}/tinymce/tinymce.min.js"></script>
<script src="{{url('/public/admin')}}/tinymce/config.js"></script>
@stop()