@extends('master')
@section('main')


	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Đăng ký tài khoản người dùng</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="index.html">HOME</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">customer register</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    
    <!--=============================================
    =            login page content         =
    =============================================-->
  
	<div class="login-area mb-130 mb-md-70 mb-sm-70 mb-xs-70 mb-xxs-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="lezada-form login-form--register">
						@if(session('mess'))
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>{{session('mess')}}</strong>
						</div>
						@endif
						<form action="" method="post">
							@csrf
							<div class="row">
								<div class="col-lg-12">
									<!--=======  login title  =======-->
									
									<div class="section-title section-title--login text-center mb-50">
										<h2 class="mb-20">Đăng ký</h2>
									</div>
									
									<!--=======  End of login title  =======-->
								</div>
								<div class="col-lg-12 mb-30">
									<label for="regEmail">Tên <span class="required">*</span> </label>
									<input type="text" name="name" required>
									@if($errors->has('name'))
									{{$errors->first('name')}}
									@endif
								</div>
								<div class="col-lg-12 mb-30">
									<label for="regEmail">Email  <span class="required">*</span> </label>
									<input type="text" id="regEmail" name="email" required>
								</div>
									@if($errors->has('email'))
									{{$errors->first('email')}}
									@endif
								<div class="col-lg-12 mb-30">
									<label for="regEmail">Địa chỉ <span class="required">*</span> </label>
									<input type="text" id="regEmail" name="address" required>
									@if($errors->has('address'))
									{{$errors->first('address')}}
									@endif
								</div>
								<div class="col-lg-12 mb-30">
									<label for="regEmail">Số điện thoại <span class="required">*</span> </label>
									<input type="text" id="regEmail" name="phone" required>
									@if($errors->has('phone'))
									{{$errors->first('phone')}}
									@endif
								</div> 
								<div class="col-lg-12 mb-50">
									<label for="regPassword">Mật khẩu <span class="required">*</span> </label>
									<input type="password" id="regPassword" name="password" required>
									@if($errors->has('password'))
									{{$errors->first('password')}}
									@endif
								</div>
								<div class="col-lg-12 mb-50">
									<label for="regPassword">Xác nhận lại mật khẩu <span class="required">*</span> </label>
									<input type="password" id="regPassword" name="confirm_password" required>
									@if($errors->has('confirm_password'))
									{{$errors->first('confirm_password')}}
									@endif
								</div>
								<div class="col-lg-12 text-center">
									<button class="lezada-button lezada-button--medium" type="submit">Đăng ký</button>
								</div>

							
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <!--=====  End of login content  ======-->


	
@stop