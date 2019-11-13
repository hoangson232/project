@extends('Backend.account_master')
@section('main')
@if(session('error'))
<div class="alert alert-warning">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>{{session('error')}}</strong>
</div>
@endif
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>Lezada</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Đề nghị nhập mail đã đăng ký để lấy mật khẩu mới</p>

    <form action="" method="post">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email...">
        <span class="glyphicon glyphicon-envelope  form-control-feedback"></span>
        @if($errors->has('email'))
        {{$errors->first('email')}}
        @endif
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Gửi mail</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
@stop()
