@extends('master')
@section('main')

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Xác nhận đơn hàng</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">Trang chủ</a></li>
							<li class="breadcrumb-list__item"><a href="{{route('show_cart')}}">Giỏ hàng</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Xác nhận đơn hàng</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    
    <!--=============================================
	=            checkout page content         =
	=============================================-->
	@if(Auth::check())
	
	<div class="checkout-page-area mb-130">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="lezada-form">
						<!-- Checkout Form s-->
						<form action="{{route('post_checkout')}}" class="checkout-form" method="post">
							@csrf
							<div class="row row-40">
								
								<div class="col-lg-7 mb-20">
									
									<!-- Billing Address -->
									<div id="billing-form" class="mb-40">
										<h4 class="checkout-title">Thông tin đơn hàng</h4>
		
										<div class="row">
		
											<div class="col-md-6 col-12 mb-20">
												<label>Tên người nhận*</label>
												<input type="text" placeholder="Tên người nhận" name="name" value="{{Auth::user()->name}}">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Địa chỉ email*</label>
												<input type="email" placeholder="Địa chỉ email" name="email" value="{{Auth::user()->email}}">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Số điện thoại người nhận*</label>
												<input type="text" placeholder="Số điện thoại" name="phone" value="{{Auth::user()->phone}}">
											</div>
		
											<div class="col-12 mb-20">
												<label>Địa chỉ*</label>
												<input type="text" placeholder="Address line 1" name="address" value="{{Auth::user()->address}}">
												
											</div>		
											<input type="hidden" name="total_price" value="{{$carts->total_price}}">
										</div>
		
									</div>
									
							
									
								</div>
								
								<div class="col-lg-5">
									<div class="row">
										
										<!-- Cart Total -->
										<div class="col-12 mb-60">
										
											<h4 class="checkout-title">Tổng tiền giỏ hàng</h4>
									
											<div class="checkout-cart-total">
		
												<h4>Sản phẩm <span>Tổng cộng</span></h4>
												
												<ul>
													@foreach($carts->items as $item)
													<li>{{$item['name']}} X {{$item['quantity']}} <span>${{$item['quantity']*$item['price']}}</span></li>
													@endforeach
												</ul>
												
												<h4>Tổng tiền <span>${{number_format($carts->total_price)}}</span></h4>
												
											</div>
											
										</div>
										
										<!-- Payment Method -->
										<div class="col-12">
											<p>Lưu ý: Bạn có thể sửa thông tin người nhận hàng</p>
											<button class="lezada-button lezada-button--medium mt-30" type="submit">Xác nhận đặt hàng</button>
											
										</div>
										
									</div>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@else 
	<p>Bạn chưa đăng nhập nên không thể tiến hành thanh toán: <a href="{{route('cus_login')}}">ĐĂNG NHẬP TẠI ĐÂY</a></p>
	
	@endif
	<!--=====  End of checkout page content  ======-->


	
@stop