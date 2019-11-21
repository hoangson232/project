@extends('master')
@section('main')
	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Chi tiết sản phẩm</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">Trang chủ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Chi tiết sản phẩm</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
					
    <!--=======  End of breadcrumb area =======-->
<!--=============================================
    =            shop page content         =
    =============================================-->
    
    <div class="shop-page-wrapper mt-100 mb-100">
        <div class="container">
            <div class="row">
				<div class="col-lg-12">
					<!--=======  shop product content  =======-->
					@if(session('mess'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{session('mess')}}</strong>
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{session('error')}}</strong>
					</div>
					@endif
					<div class="shop-product">
						<div class="row pb-100">
							<div class="col-lg-6 mb-md-70 mb-sm-70">
								<!--=======  shop product big image gallery  =======-->
								
								<div class="shop-product__big-image-gallery-wrapper mb-30">

									<!--=======  shop product gallery icons  =======-->
									
									<!-- {{-- <div class="single-product__floating-badges single-product__floating-badges--shop-product">
										<span class="hot">hot</span>
									</div> --}} -->
									

									<div class="shop-product-rightside-icons">
										@if(Auth::check())
										<span class="wishlist-icon">
												<a href="{{route('add_wishlist',['account_id'=>Auth::user()->id,'product_id'=>$pro->id])}}" data-tippy="Thêm vào mục ưa thích" data-tippy-placement="left" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" ><i class="ion-android-favorite-outline"></i></a>
												</span>
										@endif
										
										<span class="enlarge-icon">
											<a class="btn-zoom-popup" href="#" data-tippy="Nhấn để xem ảnh" data-tippy-placement="left" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" ><i class="ion-android-expand"></i></a>
										</span>
									</div>
									
									<!--=======  End of shop product gallery icons  =======-->
									@if($pro->sale_price >0)
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">Sale</span>
                                        </div>
                                        @endif
									<div class="shop-product__big-image-gallery-slider">

										<!--=======  single image  =======-->
										
										<div class="single-image">
											<img src="{{url('')}}/uploads/{{$pro->image}}" class="img-fluid" alt="">
											
										</div>
										
										<!--=======  End of single image  =======-->

										<!--=======  single image  =======-->
										@foreach($imgPro as $img)
										
										<div class="single-image">
											<img src="{{url('')}}/uploads/{{$img->link}}" class="img-fluid" alt="">
										</div>
										
										<!--=======  End of single image  =======-->
										@endforeach
	
									</div>

								</div>
								
								<!--=======  End of shop product big image gallery  =======-->

								<!--=======  shop product small image gallery  =======-->
								
								<div class="shop-product__small-image-gallery-wrapper">

									<div class="shop-product__small-image-gallery-slider">
										<!--=======  single image  =======-->
										
										<div class="single-image">
											<img src="{{url('')}}/uploads/{{$pro->image}}" class="img-fluid" alt="">
											
										</div>
										
										<!--=======  End of single image  =======-->

										<!--=======  single image  =======-->
										@foreach($imgPro as $img)
										
										<div class="single-image">
											<img src="{{url('')}}/uploads/{{$img->link}}" class="img-fluid" alt="">
										</div>
										
										<!--=======  End of single image  =======-->
										@endforeach
										
									</div>

								</div>
								
								<!--=======  End of shop product small image gallery  =======-->
							</div>

							<div class="col-lg-6">
								<!--=======  shop product description  =======-->
								
								<div class="shop-product__description">


									<!--=======  shop product title  =======-->
									
									<div class="shop-product__title mb-15">
										<h2>{{$pro->name}}</h2>
									</div>
									
									<!--=======  End of shop product title  =======-->
									
									<!--=======  shop product price  =======-->
									
									<div class="shop-product__price mb-30">
										@if($pro->sale_price >0)
                                            <span class="main-price discounted">{{number_format($pro->price)}} Đ</span>
                                            <span class="discounted-price">{{number_format($pro->sale_price)}} Đ</span>
                                             @else 
                                            <span class="main-price">{{number_format($pro->price)}} Đ</span>
                                             @endif
									</div>
									
									<!--=======  End of shop product price  =======-->
			
									<!--=======  shop product short description  =======-->
									
									<div class="shop-product__short-desc mb-50">
										{{$pro->description}}
									</div>
									
									<!--=======  End of shop product short description  =======-->
		
			
									<!--=======  shop product quantity block  =======-->
									
									{{-- <div class="shop-product__block shop-product__block--quantity mb-40">
										<div class="shop-product__block__title">Số lượng</div>
										<div class="shop-product__block__value">
											<div class="pro-qty d-inline-block mx-0 pt-0">
												<input type="text" value="1">
											</div>
										</div>
									</div> --}}
									
									<!--=======  End of shop product quantity block  =======-->
									
									<!--=======  shop product buttons  =======-->
									
									<div class="shop-product__buttons mb-40">
										@if(Auth::check())
										<a class="lezada-button lezada-button--medium" href="{{route('add_cart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a>
										@else
										<a class="lezada-button lezada-button--medium" href="" onclick="return confirm('Bạn cần đăng nhập để mua hàng')">Thêm vào giỏ hàng</a>
										@endif
									</div>
									
									<!--=======  End of shop product buttons  =======-->
			
								</div>
								
								<!--=======  End of shop product description  =======-->
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<!--=======  shop product description tab  =======-->
								
								<div class="shop-product__description-tab pt-100">
									<!--=======  tab navigation  =======-->
					
									<div class="tab-product-navigation tab-product-navigation--product-desc mb-50">
										<div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
											
											<a class="nav-item nav-link active" id="product-tab-3" data-toggle="tab" href="#product-series-3" role="tab" aria-selected="false">BÌNH LUẬN</a>
										</div>
									</div>
									
									<!--=======  End of tab navigation  =======-->

									<!--=======  tab content  =======-->
									
									<div class="tab-content" id="nav-tabContent2">

										<div class="tab-pane fade" id="product-series-1" role="tabpanel" aria-labelledby="product-tab-1">
											<!--=======  shop product long description  =======-->
											
											<div class="shop-product__long-desc mb-30">
												<p>{{$pro->description}}</p>
											</div>
											
											<!--=======  End of shop product long description  =======-->
										</div>

									

										<div class="tab-pane fade show active" id="product-series-3" role="tabpanel" aria-labelledby="product-tab-3">
											<!--=======  shop product reviews  =======-->
											
											<div class="shop-product__review">
												<h2 class="review-title mb-20">đang có {{count($show)}} bình luận về {{$pro->name}}</h2>

												<!--=======  single review  =======-->
												@foreach($show as $value)
												
												<div class="single-review">
													<div class="single-review__image">
														<img src="{{url('')}}/public/assets/images/user/user1.jpg" class="img-fluid" alt="">
													</div>
													<div class="single-review__content">

														<!--=======  username and date  =======-->
														
														<p class="username"> {{$value->acc->name}} đã bình luận<span class="date">/ {{$value->created_at}}</span></p> 
														
														<!--=======  End of username and date  =======-->

														<!--=======  message  =======-->
														
														<p class="message">
															{{$value->comment}}
														</p>
														
														<!--=======  End of message  =======-->
													</div>
												</div>
												@endforeach
												
												<!--=======  End of single review  =======-->

												<h2 class="review-title mb-20">THÊM BÌNH LUẬN</h2>
												@if(Auth::check())

												@else
												<p class="text-center">Bạn phải đăng nhập để sử dụng chức năng này</p>
												@endif
												<!--=======  review form  =======-->
												
												<div class="lezada-form lezada-form--review">
													<form action="#" method="POST">
														@csrf
														<div class="row">
															@if(Auth::check())
															<div class="col-lg-6 mb-20">
																<h4>{{Auth::user()->name}}</h4>
															</div>
															<div class="col-lg-12 mb-20">
																<textarea cols="30" rows="10" placeholder="Nhập bình luận tại đây..." name="comment"></textarea>
															</div>
															<div class="col-lg-12 text-center">
																<button type="submit" class="lezada-button lezada-button--medium">bình luận</button>
															</div>
															@endif
														</div>
													</form>
												</div>
												
												<!--=======  End of review form  =======-->


											</div>
											
											<!--=======  End of shop product reviews  =======-->
										</div>

									</div>
									
									<!--=======  End of tab content  =======-->
								</div>
								
								<!--=======  End of shop product description tab  =======-->
							</div>
						</div>
					</div>
					
					<!--=======  End of shop product content  =======-->
				</div>
            </div>
        </div>
    </div>
    
    <!--=====  End of shop page content  ======-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    @stop