@extends('master')
@section('main')

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Checkout</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">HOME</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">checkout</li>
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
										<h4 class="checkout-title">Billing Address</h4>
		
										<div class="row">
		
											<div class="col-md-6 col-12 mb-20">
												<label>First Name*</label>
												<input type="text" placeholder="First Name" name="name" value="{{Auth::user()->name}}">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Last Name*</label>
												<input type="text" placeholder="Last Name">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Email Address*</label>
												<input type="email" placeholder="Email Address" name="email" value="{{Auth::user()->email}}">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Phone no*</label>
												<input type="text" placeholder="Phone number" name="phone" value="{{Auth::user()->phone}}">
											</div>
		
											<div class="col-12 mb-20">
												<label>Company Name</label>
												<input type="text" placeholder="Company Name">
											</div>
		
											<div class="col-12 mb-20">
												<label>Address*</label>
												<input type="text" placeholder="Address line 1" name="address" value="{{Auth::user()->address}}">
												
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Country*</label>
												<select class="nice-select">
													<option>Bangladesh</option>
													<option>China</option>
													<option>country</option>
													<option>India</option>
													<option>Japan</option>
												</select>
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Town/City*</label>
												<input type="text" placeholder="Town/City">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>State*</label>
												<input type="text" placeholder="State">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Zip Code*</label>
												<input type="text" placeholder="Zip Code">
											</div>
		
											<div class="col-12 mb-20">
												<div class="check-box">
													<input type="checkbox" id="create_account">
													<label for="create_account">Create an Acount?</label>
												</div>
												<div class="check-box">
													<input type="checkbox" id="shiping_address" data-shipping>
													<label for="shiping_address">Ship to Different Address</label>
												</div>
											</div>
		
										</div>
		
									</div>
									
									<!-- Shipping Address -->
									<div id="shipping-form" class="mb-40">
										<h4 class="checkout-title">Shipping Address</h4>
		
										<div class="row">
		
											<div class="col-md-6 col-12 mb-20">
												<label>First Name*</label>
												<input type="text" placeholder="First Name" name="name_ship">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Last Name*</label>
												<input type="text" placeholder="Last Name">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Email Address*</label>
												<input type="email" placeholder="Email Address" name="email_ship">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Phone no*</label>
												<input type="text" placeholder="Phone number" name="phone_ship">
											</div>
		
											<div class="col-12 mb-20">
												<label>Company Name</label>
												<input type="text" placeholder="Company Name">
											</div>
		
											<div class="col-12 mb-20">
												<label>Address*</label>
												<input type="text" placeholder="Address line 1" name="address_ship">
												
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Country*</label>
												<select class="nice-select">
													<option>Bangladesh</option>
													<option>China</option>
													<option>country</option>
													<option>India</option>
													<option>Japan</option>
												</select>
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Town/City*</label>
												<input type="text" placeholder="Town/City">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>State*</label>
												<input type="text" placeholder="State">
											</div>
		
											<div class="col-md-6 col-12 mb-20">
												<label>Zip Code*</label>
												<input type="text" placeholder="Zip Code">
											</div>
		
										</div>
		
									</div>
									
								</div>
								
								<div class="col-lg-5">
									<div class="row">
										
										<!-- Cart Total -->
										<div class="col-12 mb-60">
										
											<h4 class="checkout-title">Cart Total</h4>
									
											<div class="checkout-cart-total">
		
												<h4>Product <span>Total</span></h4>
												
												<ul>
													@foreach($carts->items as $item)
													<li>{{$item['name']}} X {{$item['quantity']}} <span>${{$item['quantity']*$item['price']}}</span></li>
													@endforeach
												</ul>
												
												<p>Sub Total <span>$104.00</span></p>
												<p>Shipping Fee <span>$00.00</span></p>
												
												<h4>Grand Total <span>${{number_format($carts->total_price)}}</span></h4>
												
											</div>
											
										</div>
										
										<!-- Payment Method -->
										<div class="col-12">
										
											<h4 class="checkout-title">Payment Method</h4>
									
											<div class="checkout-payment-method">
												
												<div class="single-method">
													<input type="radio" id="payment_check" name="payment-method" value="check">
													<label for="payment_check">Check Payment</label>
													<p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
												</div>
												
												<div class="single-method">
													<input type="radio" id="payment_bank" name="payment-method" value="bank">
													<label for="payment_bank">Direct Bank Transfer</label>
													<p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
												</div>
												
												<div class="single-method">
													<input type="radio" id="payment_cash" name="payment-method" value="cash">
													<label for="payment_cash">Cash on Delivery</label>
													<p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
												</div>
												
												<div class="single-method">
													<input type="radio" id="payment_paypal" name="payment-method" value="paypal">
													<label for="payment_paypal">Paypal</label>
													<p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
												</div>
												
												<div class="single-method">
													<input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
													<label for="payment_payoneer">Payoneer</label>
													<p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
												</div>
												
												<div class="single-method">
													<input type="checkbox" id="accept_terms">
													<label for="accept_terms">I’ve read and accept the terms & conditions</label>
												</div>
												
											</div>
											
											<button class="lezada-button lezada-button--medium mt-30" type="submit">Place order</button>
											
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
	<a href="{{route('cus_login')}}">Bạn chưa đăng nhập</a>
	@endif
	<!--=====  End of checkout page content  ======-->


	
@stop