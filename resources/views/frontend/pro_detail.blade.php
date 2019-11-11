@extends('master')
@section('main')
<!--=============================================
    =            shop page content         =
    =============================================-->
    
    <div class="shop-page-wrapper mt-100 mb-100">
        <div class="container">
            <div class="row">
				<div class="col-lg-12">
					<!--=======  shop product content  =======-->
					
					<div class="shop-product">
						<div class="row pb-100">
							<div class="col-lg-6 mb-md-70 mb-sm-70">
								<!--=======  shop product big image gallery  =======-->
								
								<div class="shop-product__big-image-gallery-wrapper mb-30">

									<!--=======  shop product gallery icons  =======-->
									
									<div class="single-product__floating-badges single-product__floating-badges--shop-product">
										<span class="hot">hot</span>
									</div>


									<div class="shop-product-rightside-icons">
										<span class="wishlist-icon">
											<a href="#" data-tippy="Add to wishlist" data-tippy-placement="left" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" ><i class="ion-android-favorite-outline"></i></a>
										</span>
										<span class="enlarge-icon">
											<a class="btn-zoom-popup" href="#" data-tippy="Click to enlarge" data-tippy-placement="left" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" ><i class="ion-android-expand"></i></a>
										</span>
									</div>
									
									<!--=======  End of shop product gallery icons  =======-->

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
									<!--=======  shop product navigation  =======-->
									
									<div class="shop-product__navigation">
										<a href="shop-product-basic.html"><i class="ion-ios-arrow-thin-left"></i></a>
										<a href="shop-product-basic.html"><i class="ion-ios-arrow-thin-right"></i></a>
									</div>
									
									<!--=======  End of shop product navigation  =======-->
			
									<!--=======  shop product rating  =======-->
									
									<div class="shop-product__rating mb-15">
										<span class="product-rating">
											<i class="active ion-android-star"></i>
											<i class="active ion-android-star"></i>
											<i class="active ion-android-star"></i>
											<i class="active ion-android-star"></i>
											<i class="ion-android-star-outline"></i>
										</span>
										
										<span class="review-link ml-20">
											<a href="#">(3 customer reviews)</a>
										</span>
									</div>
									
									<!--=======  End of shop product rating  =======-->

									<!--=======  shop product title  =======-->
									
									<div class="shop-product__title mb-15">
										<h2>{{$pro->name}}</h2>
									</div>
									
									<!--=======  End of shop product title  =======-->
									
									<!--=======  shop product price  =======-->
									
									<div class="shop-product__price mb-30">
										@if($pro->sale_price >0)
                                            <span class="main-price discounted">{{number_format($pro->price)}} Đ</span>
                                            <span class="discounted-price">{{$pro->sale_price}} Đ</span>
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
			
									<!--=======  shop product size block  =======-->
									
									<div class="shop-product__block shop-product__block--size mb-20">
										<div class="shop-product__block__title">Size: </div>
										<div class="shop-product__block__value">
											<div class="shop-product-size-list">
												<span class="single-size">L</span>
												<span class="single-size">M</span>
												<span class="single-size">S</span>
												<span class="single-size">XS</span>
											</div>
										</div>
									</div>
									
									<!--=======  End of shop product size block  =======-->
			
									<!--=======  shop product color block  =======-->
									
									<div class="shop-product__block shop-product__block--color mb-20">
										<div class="shop-product__block__title">Color: </div>
										<div class="shop-product__block__value">
											<div class="shop-product-color-list">
			
												<ul class="single-filter-widget--list single-filter-widget--list--color">
													<li class="mb-0 pt-0 pb-0 mr-10"><a class="active" href="#"><span class="color-picker black"></span></a></li>
													<li class="mb-0 pt-0 pb-0 mr-10"><a href="#"><span class="color-picker blue"></span></a></li>
													<li class="mb-0 pt-0 pb-0 mr-10"><a href="#"><span class="color-picker brown"></span></a></li>
													
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of shop product color block  =======-->
			
									<!--=======  shop product quantity block  =======-->
									
									<div class="shop-product__block shop-product__block--quantity mb-40">
										<div class="shop-product__block__title">Số lượng</div>
										<div class="shop-product__block__value">
											<div class="pro-qty d-inline-block mx-0 pt-0">
												<input type="text" value="1">
											</div>
										</div>
									</div>
									
									<!--=======  End of shop product quantity block  =======-->
			
									<!--=======  shop product buttons  =======-->
									
									<div class="shop-product__buttons mb-40">
										<a class="lezada-button lezada-button--medium" href="{{route('add-cart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a>
										<a class="lezada-compare-button ml-20" href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-placement="left" data-tippy-arrow="true" data-tippy-theme = "sharpborder" ><i class="ion-ios-shuffle"></i></a>
									</div>
									
									<!--=======  End of shop product buttons  =======-->
			
									<!--=======  shop product brands  =======-->
									
									<div class="shop-product__brands mb-20">
			
										<a href="#">
											<img src="{{url('')}}/public/assets/images/brands/brand-1.png" class="img-fluid" alt="">
										</a>
			
										<a href="#">
											<img src="{{url('')}}/public/assets/images/brands/brand-2.png" class="img-fluid" alt="">
										</a>
			
									</div>
									
									<!--=======  End of shop product brands  =======-->
			
									<!--=======  other info table  =======-->
									
									<div class="quick-view-other-info pb-0">
										<table>
											<tr class="single-info">
												<td class="quickview-title">SKU: </td>
												<td class="quickview-value">12345</td>
											</tr>
											<tr class="single-info">
												<td class="quickview-title">Categories: </td>
												<td class="quickview-value">
													<a href="#">Fashion</a>, 
													<a href="#">Men</a>,
													<a href="#">Sunglasses</a> 
												</td>
											</tr>
											<tr class="single-info">
												<td class="quickview-title">Tags: </td>
												<td class="quickview-value">
													<a href="#">Fashion</a>, 
													<a href="#">Men</a>
												</td>
											</tr>
											<tr class="single-info">
												<td class="quickview-title">Share on: </td>
												<td class="quickview-value">
													<ul class="quickview-social-icons">
														<li><a href="#"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
													</ul>
												</td>
											</tr>
										</table>
									</div>
									
									<!--=======  End of other info table  =======-->
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
											<a class="nav-item nav-link active" id="product-tab-1" data-toggle="tab" href="#product-series-1" role="tab" aria-selected="true">Mô tả</a>
											<a class="nav-item nav-link" id="product-tab-2" data-toggle="tab" href="#product-series-2" role="tab" aria-selected="false">Thông tin thêm</a>
											<a class="nav-item nav-link" id="product-tab-3" data-toggle="tab" href="#product-series-3" role="tab" aria-selected="false">Reviews (3)</a>
										</div>
									</div>
									
									<!--=======  End of tab navigation  =======-->

									<!--=======  tab content  =======-->
									
									<div class="tab-content" id="nav-tabContent2">

										<div class="tab-pane fade show active" id="product-series-1" role="tabpanel" aria-labelledby="product-tab-1">
											<!--=======  shop product long description  =======-->
											
											<div class="shop-product__long-desc mb-30">
												<p>{{$pro->description}}</p>
											</div>
											
											<!--=======  End of shop product long description  =======-->
										</div>

										<div class="tab-pane fade" id="product-series-2" role="tabpanel" aria-labelledby="product-tab-2">
											<!--=======  shop product additional information  =======-->
											
											<div class="shop-product__additional-info">
												<table class="shop-attributes">
													<tbody>
														<tr>
															<th>Size</th>
															<td><p>L, M, S, XS</p></td>
														</tr>
														<tr>
															<th>Color</th>
															<td><p>Black, Blue, Brown</p></td>
														</tr>
													</tbody>
												</table>
											</div>
											
											<!--=======  End of shop product additional information  =======-->
										</div>

										<div class="tab-pane fade" id="product-series-3" role="tabpanel" aria-labelledby="product-tab-3">
											<!--=======  shop product reviews  =======-->
											
											<div class="shop-product__review">
												<h2 class="review-title mb-20">3 reviews for High-waist Trousers</h2>

												<!--=======  single review  =======-->
												
												<div class="single-review">
													<div class="single-review__image">
														<img src="{{url('')}}/public/assets/images/user/user1.jpg" class="img-fluid" alt="">
													</div>
													<div class="single-review__content">
														<!--=======  rating  =======-->
														
														<div class="shop-product__rating">
															<span class="product-rating">
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="ion-android-star-outline"></i>
															</span>
														</div>
														
														<!--=======  End of rating  =======-->

														<!--=======  username and date  =======-->
														
														<p class="username">Scott James <span class="date">/ April 5, 2018</span></p> 
														
														<!--=======  End of username and date  =======-->

														<!--=======  message  =======-->
														
														<p class="message">
															Thanks for always keeping your HTML themes up to date. Your level of support and dedication is second to none.
														</p>
														
														<!--=======  End of message  =======-->
													</div>
												</div>
												
												<!--=======  End of single review  =======-->

												<!--=======  single review  =======-->
												
												<div class="single-review">
													<div class="single-review__image">
														<img src="{{url('')}}/public/assets/images/user/user2.jpg" class="img-fluid" alt="">
													</div>
													<div class="single-review__content">
														<!--=======  rating  =======-->
														
														<div class="shop-product__rating">
															<span class="product-rating">
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="ion-android-star-outline"></i>
															</span>
														</div>
														
														<!--=======  End of rating  =======-->

														<!--=======  username and date  =======-->
														
														<p class="username">Owen Christ <span class="date">/ April 7, 2018</span></p> 
														
														<!--=======  End of username and date  =======-->

														<!--=======  message  =======-->
														
														<p class="message">
															I didn’t expect this poster to arrive folded. Now there are lines on the poster and one sad Ninja.
														</p>
														
														<!--=======  End of message  =======-->
													</div>
												</div>
												
												<!--=======  End of single review  =======-->

												<!--=======  single review  =======-->
												
												<div class="single-review">
													<div class="single-review__image">
														<img src="{{url('')}}/public/assets/images/user/user3.jpg" class="img-fluid" alt="">
													</div>
													<div class="single-review__content">
														<!--=======  rating  =======-->
														
														<div class="shop-product__rating">
															<span class="product-rating">
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="active ion-android-star"></i>
																<i class="ion-android-star-outline"></i>
															</span>
														</div>
														
														<!--=======  End of rating  =======-->

														<!--=======  username and date  =======-->
														
														<p class="username">Edna Watson <span class="date">/ April 5, 2018</span></p> 
														
														<!--=======  End of username and date  =======-->

														<!--=======  message  =======-->
														
														<p class="message">
															Can’t wait to start mixin’ with this one! Irba-irr-Up-up-up-up-date your theme!
														</p>
														
														<!--=======  End of message  =======-->
													</div>
												</div>
												
												<!--=======  End of single review  =======-->

												<h2 class="review-title mb-20">Add a review</h2>
												<p class="text-center">Your email address will not be published. Required fields are marked *</p>

												<!--=======  review form  =======-->
												
												<div class="lezada-form lezada-form--review">
													<form action="#">
														<div class="row">
															<div class="col-lg-6 mb-20">
																<input type="text" placeholder="Name *" required>
															</div>
															<div class="col-lg-6 mb-20">
																<input type="email" placeholder="Email *" required>
															</div>
															<div class="col-lg-12 mb-20">
																<span class="rating-title mr-30">YOUR RATING</span>
																<span class="product-rating">
																	
																	<i class="active ion-android-star-outline"></i>
																	<i class="active ion-android-star-outline"></i>
																	<i class="active ion-android-star-outline"></i>
																	<i class="active ion-android-star-outline"></i>
																	<i class="active ion-android-star-outline"></i>
																</span>
															</div>
															<div class="col-lg-12 mb-20">
																<textarea cols="30" rows="10" placeholder="Your review *"></textarea>
															</div>
															<div class="col-lg-12 text-center">
																<button type="submit" class="lezada-button lezada-button--medium">submit</button>
															</div>
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
    @stop