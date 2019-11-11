@extends('Backend.master')
@section('title','Thêm mới tài khoản')
@section('main')
<form action="" method="POST" role="form">
	@csrf
	<legend>Form add new</legend>

	<div class="form-group">
		<label for="">new name</label>
		<input type="text" class="form-control" name="name" placeholder="Input name">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">email</label>
		<input type="text" class="form-control" name="email" placeholder="Input name">
		@if($errors->has('email'))
		{{$errors->first('email')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">phone</label>
		<input type="text" class="form-control" name="phone" placeholder="Input name">
		@if($errors->has('phone'))
		{{$errors->first('phone')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">address</label>
		<input type="text" class="form-control" name="address" placeholder="Input name">
		@if($errors->has('address'))
		{{$errors->first('address')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">password</label>
		<input type="password" class="form-control" name="password" placeholder="Input name">
		@if($errors->has('password'))
		{{$errors->first('password')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Confirm password</label>
		<input type="password" class="form-control" name="confirm_password" placeholder="Input name">
		@if($errors->has('confirm_password'))
		{{$errors->first('confirm_password')}}
		@endif
	</div>

	<button type="submit" class="btn btn-primary">Save</button>
</form>
@stop()
