@extends('master')
@section('main')


	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Đăng nhập</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="index.html">Trang chủ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Đăng nhập</li>
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
				<div class="col-lg-6 mb-md-50 mb-sm-50">
					<div class="lezada-form login-form">
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
										<h2 class="mb-20">Đăng nhập</h2>
										<p>Chào mừng trở lại!</p>
									</div>
									
									<!--=======  End of login title  =======-->
								</div>
								<div class="col-lg-12 mb-60">
									<input type="text" placeholder="Địa chỉ email" required name="email">
								</div>
								<div class="col-lg-12 mb-60">
									<input type="password" placeholder="Mật khẩu" required name="password">
								</div>
								<div class="col-lg-12 text-center mb-30">
									<button class="lezada-button lezada-button--medium" type="submit">Đăng nhập</button>
								</div>

								<div class="col-lg-12">
									<input type="checkbox" > <span class="remember-text" name="remember">Remember me</span>
									<a href="{{route('forgot_password')}}" class="reset-pass-link">Quên mật khẩu?</a>
									<a href="{{route('cus_add')}}" class="reset-pass-link">Đăng ký người dùng</a>
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