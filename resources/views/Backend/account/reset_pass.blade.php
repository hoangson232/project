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
    <p class="login-box-msg">Xin chào, {{$pass->name}},Đặt mật khẩu mới</p>

    <form action="" method="post">
      @csrf
     <input type="hidden" name="reset_token" value="">
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="new_password" placeholder="Mật khẩu mới...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('new_password'))
        {{$errors->first('new_password')}}
        @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu mới...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('confirm_password'))
        {{$errors->first('confirm_password')}}
        @endif
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Thay đổi</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
@stop()
