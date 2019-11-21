@extends('backend.master')
@section('title','Sửa Blog')
@section('main')
<div class="row">
			<div class="col-md-12">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
		@csrf
			<div class="form-group">
				<label class="" for="">name</label>
				<input type="text" class="form-control" id="title" placeholder="Tên blog" name="name" onkeyup="ChangeToSlug()" value="{{$blogs->name}}">
				@if($errors->has('name'))
				{{$errors->first('name')}}
				@endif
			</div>
			<div class="form-group">
				<label class="" for="">slug</label>
				<input type="text" class="form-control" id="slug" placeholder="Tên banner" name="slug" value="{{$blogs->slug}}">
				@if($errors->has('slug'))
				{{$errors->first('slug')}}
				@endif
			</div>
			<div class="form-group">
				<label class="" for="">Content</label>
					<textarea name="content" class="form-control ckeditor" placeholder="nội dung" id="content">{{$blogs->content}}</textarea>
					@if($errors->has('content'))
					{{$errors->first('content')}}
					@endif
				</div>
			<div class="form-group">
					<label class="" for="">Chọn ảnh</label>
					<input type="file" class="" id="" placeholder="" name="image">
					<img src="{{url('')}}/uploads/blog/{{$blogs->image}}" width="100px">
					@if($errors->has('image'))
					{{$errors->first('image')}}
					@endif
			</div>
			<div class="form-group">
					<label class="" for="">Trạng Thái</label>
					<br>
					<input type="radio" class=""  placeholder="status" name="status" value="0" {{($blogs->status==0)?'checked' : ''}}> ẩn
					<input type="radio" class=""  placeholder="status" name="status" value="1" {{($blogs->status==1)?'checked' : ''}}> hiện
			</div>

		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
</div>
@stop
<script>
	function ChangeToSlug()
{
    var title, slug;
 
    //Lấy text từ thẻ input title 
    title = document.getElementById("title").value;
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, " - ");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>