@extends('master')
@section('main')
	    <!--=============================================
    =            slider area         =
    =============================================-->
    
    <div class="slider-area mb-80 mb-md-60 mb-sm-60">
       
        <!--=======  slider-wrapper  =======-->
        
        <div class="lezada-slick-slider decor-slider-wrapper"
        data-slick-setting='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "dots": false,
            "centerMode": true,
            "centerPadding": "22%",
            "autoplay": true,
            "autoplaySpeed": 5000,
            "speed": 1000,
            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ti-angle-left" },
            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ti-angle-right" }
        }'
        data-slick-responsive='[
            {"breakpoint":1501, "settings": {"slidesToShow": 1, "arrows": true, "centerPadding": "160px"} },
            {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": true, "centerMode": false} },
            {"breakpoint":991, "settings": {"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "centerMode": false} },
            {"breakpoint":767, "settings": {"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "centerMode": false} },
            {"breakpoint":575, "settings": {"slidesToShow": 1, "slidesToScroll": 1,  "arrows": true, "centerMode": false} },
            {"breakpoint":479, "settings": {"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "centerMode": false} }
        ]'
        >


            <!--=======  single slider  =======-->
            <div class="decor-single-slider">
                <div class="decor-single-slider-content">
                <!--=======  slider image  =======-->
                
                <div class="slider-image">
                    <img src="{{url('')}}/public/assets/images/slider/banner-carousel-1.jpg" class="img-fluid" alt="">

                </div>
                
                <!--=======  End of slider image  =======-->

                <!--=======  slider content  =======-->
                
                <div class="slider-content">
                    <div class="color-title color-title--blue">
                        Đồ lưu niệm
                    </div>

                    <div class="main-title">
                        Lọ xay tiêu, <br>
                        Loại nhỏ
                    </div>

                    <a href="shop-left-sidebar.html" class="lezada-button lezada-button--medium">mua ngay</a>
                </div>
                
                <!--=======  End of slider content  =======-->
                </div>
            </div>
            
            <!--=======  End of single slider  =======-->

            <!--=======  single slider  =======-->
            <div class="decor-single-slider">
                <div class="decor-single-slider-content">
                <!--=======  slider image  =======-->
                
                <div class="slider-image">
                    <img src="{{url('')}}/public/assets/images/slider/banner-carousel-2.jpg" class="img-fluid" alt="">

                </div>
                
                <!--=======  End of slider image  =======-->

                <!--=======  slider content  =======-->
                
                <div class="slider-content">
                    <div class="color-title color-title--brown">
                        Đồ handmade
                    </div>

                    <div class="main-title">
                       Thớt, <br>
                       Loại lớn
                    </div>

                    <a href="shop-left-sidebar.html" class="lezada-button lezada-button--medium">mua ngay</a>
                </div>
                
                <!--=======  End of slider content  =======-->
                </div>
            </div>
            
            <!--=======  End of single slider  =======-->

            <!--=======  single slider  =======-->
            <div class="decor-single-slider">
                <div class="decor-single-slider-content">
                    <!--=======  slider image  =======-->
                    
                    <div class="slider-image">
                        <img src="{{url('')}}/public/assets/images/slider/banner-carousel-3.jpg" class="img-fluid" alt="">

                    </div>
                    
                    <!--=======  End of slider image  =======-->

                    <!--=======  slider content  =======-->
                    
                    <div class="slider-content">
                        <div class="color-title color-title--green">
                            Đồ trang trí
                        </div>

                        <div class="main-title">
                            Đèn treo trần <br>
                            
                        </div>

                        <a href="shop-left-sidebar.html" class="lezada-button lezada-button--medium">mua ngay</a>
                    </div>
                    
                    <!--=======  End of slider content  =======-->
                </div>
            </div>
            <!--=======  End of single slider  =======-->


        </div>
        
        <!--=======  End of slider-wrapper  =======-->
    </div>
            
    
    <!--=====  End of slider area  ======-->

    <!--=============================================
    =            tab product list area         =
    =============================================-->
    
    <div class="tab-product-list-area mb-25 mb-md-5 mb-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  tab product navigation  =======-->
                    
                    <div class="tab-product-navigation mb-50">
                        <div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
                            <a class="nav-item nav-link active" id="product-tab-1" data-toggle="tab" href="#product-series-1" role="tab" aria-selected="true">mới về</a>
                            <a class="nav-item nav-link" id="product-tab-2" data-toggle="tab" href="#product-series-2" role="tab" aria-selected="false">phổ biến</a>
                            <a class="nav-item nav-link" id="product-tab-3" data-toggle="tab" href="#product-series-3" role="tab" aria-selected="false">giảm giá</a>
                        </div>
                    </div>
                    
                    <!--=======  End of tab product navigation  =======-->
                    @if(session('mes'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{session('mes')}}</strong>
                    </div>
                    @endif

                    <!--=======  tab product content  =======-->
                    
                    <div class="tab-content"  id="nav-tabContent2">
                        <div class="tab-pane fade show active" id="product-series-1" role="tabpanel" aria-labelledby="product-tab-1">
                            <div class="row">
                                @foreach($productNew as $value)
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="{{route('pro_detail',['slug'=>$value->slug])}}">
                                            <img src="{{url('')}}/uploads/{{$value->image}}" class="img-fluid" alt="" width="100px">
                                            <img src="{{url('')}}/uploads/{{$value->image}}" class="img-fluid" alt="" width="100px">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-25%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="" href="{{route('pro_detail',['slug'=>$value->slug])}}" ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">{{$value->name}}</a></h3>
                                            <a href="{{route('add-cart',['id'=>$value->id])}}">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            @if($value->sale_price >0)
                                            <span class="main-price discounted">{{number_format($value->price)}} Đ</span>
                                            <span class="discounted-price">{{number_format($value->sale_price)}} Đ</span>
                                             @else 
                                            <span class="main-price">{{number_format($value->price)}} Đ</span>
                                             @endif
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                @endforeach
                                
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="product-series-2" role="tabpanel" aria-labelledby="product-tab-2">
                            <div class="row">

                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                        <div class="single-product">
                                        <!--=======  single product image  =======-->
                                        
                                        <div class="single-product__image">
                                            <a class="image-wrap" href="shop-product-basic.html">
                                                <img src="{{url('')}}/public/assets/images/products/furniture-7-1-600x800.jpg" class="img-fluid" alt="">
                                                <img src="{{url('')}}/public/assets/images/products/furniture-7-2-600x800.jpg" class="img-fluid" alt="">
                                            </a>
                    
                                            <div class="single-product__floating-badges">
                                                <span class="onsale">-25%</span>
                                            </div>
                                            
                                            <div class="single-product__floating-icons">
                                                <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                                <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                                <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                            </div>
                                        </div>
                                        
                                        <!--=======  End of single product image  =======-->
                    
                                        <!--=======  single product content  =======-->
                                
                                        <div class="single-product__content">
                                            <div class="title">
                                                <h3> <a href="shop-product-basic.html">Candle Inside Glass</a></h3>
                                                <a href="#">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="price">
                                                <span class="main-price discounted">$360.00</span>
                                                <span class="discounted-price">$300.00</span>
                                            </div>
                                        </div>
                                        
                                        <!--=======  End of single product content  =======-->
                                        </div>
                                </div>
                                <!--=======  End of single product  =======-->

                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-8-1-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-15%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a  class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Wooden Round Table</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$400.00</span>
                                            <span class="discounted-price">$380.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-9-1-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-25%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Dining Chair</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">260.00</span>
                                            <span class="discounted-price">$200.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->

                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-4-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-4-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-25%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Grey Tool</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$160.00</span>
                                            <span class="discounted-price">$100.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-5-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-5-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-15%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a  class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Hanged Candle Holder</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$400.00</span>
                                            <span class="discounted-price">$380.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-6-1-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Wooden Candle Holder</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price">$85.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->

                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-1-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-1-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-15%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a  class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Wooden Round Table</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$400.00</span>
                                            <span class="discounted-price">$380.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-2-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-2-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Sofa with Cushion</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price">$85.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-3-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-3-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-25%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Green Coutch</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$360.00</span>
                                            <span class="discounted-price">$300.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="product-series-3" role="tabpanel" aria-labelledby="product-tab-3">
                            <div class="row">

                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-1-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-1-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-15%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a  class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Wooden Round Table</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$400.00</span>
                                            <span class="discounted-price">$380.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-2-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-2-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Sofa with Cushion</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price">$85.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-3-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-3-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-25%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Green Coutch</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$360.00</span>
                                            <span class="discounted-price">$300.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                        <div class="single-product">
                                        <!--=======  single product image  =======-->
                                        
                                        <div class="single-product__image">
                                            <a class="image-wrap" href="shop-product-basic.html">
                                                <img src="{{url('')}}/public/assets/images/products/furniture-7-1-600x800.jpg" class="img-fluid" alt="">
                                                <img src="{{url('')}}/public/assets/images/products/furniture-7-2-600x800.jpg" class="img-fluid" alt="">
                                            </a>
                    
                                            <div class="single-product__floating-badges">
                                                <span class="onsale">-25%</span>
                                            </div>
                                            
                                            <div class="single-product__floating-icons">
                                                <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                                <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                                <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                            </div>
                                        </div>
                                        
                                        <!--=======  End of single product image  =======-->
                    
                                        <!--=======  single product content  =======-->
                                
                                        <div class="single-product__content">
                                            <div class="title">
                                                <h3> <a href="shop-product-basic.html">Candle Inside Glass</a></h3>
                                                <a href="#">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="price">
                                                <span class="main-price discounted">$360.00</span>
                                                <span class="discounted-price">$300.00</span>
                                            </div>
                                        </div>
                                        
                                        <!--=======  End of single product content  =======-->
                                        </div>
                                </div>
                                <!--=======  End of single product  =======-->

                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-8-1-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-15%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a  class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Wooden Round Table</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$400.00</span>
                                            <span class="discounted-price">$380.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-9-1-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-25%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Dining Chair</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">260.00</span>
                                            <span class="discounted-price">$200.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->

                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-4-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-4-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-25%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Grey Tool</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$160.00</span>
                                            <span class="discounted-price">$100.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-5-1-600x800.jpg" class="img-fluid" alt="">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-5-2-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">-15%</span>
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a  class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Hanged Candle Holder</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price discounted">$400.00</span>
                                            <span class="discounted-price">$380.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->
                                
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="shop-product-basic.html">
                                            <img src="{{url('')}}/public/assets/images/products/furniture-6-1-600x800.jpg" class="img-fluid" alt="">
                                        </a>
                
                                        <div class="single-product__floating-badges">
                                        </div>
                                        
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            <span class="compare"><a href="#" data-tippy="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-shuffle-strong"></i></a></span>
                                            <span class="quickview"><a class="cd-trigger" href="#qv-1"  data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left"  ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">Wooden Candle Holder</a></h3>
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="price">
                                            <span class="main-price">$85.00</span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product content  =======-->
                                    </div>
                                </div>
                                <!--=======  End of single product  =======-->

                                
                            </div>
                        </div>
                    </div>
                    
                    <!--=======  End of tab product content  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of tab product list area  ======-->
       <!--=============================================
    =            footer banner section area        =
    =============================================-->
    
    <div class="footer-banner-section-area mb-100 mb-md-80 mb-sm-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!--=======  ad section  =======-->
                    
                    <div class="footer-banner-section text-center">
                        <!--=======  ad section image  =======-->
                        
                        <div class="footer-banner-section-image mb-35">
                            <img src="{{url('')}}/public/assets/images/banners/cabinet.jpg" class="img-fluid" alt="">
                        </div>
                        
                        <!--=======  End of ad section image  =======-->

                        <!--=======  ad tags  =======-->
                        
                        <div class="footer-banner-tags mb-35">
                            <ul>
                                <li><a href="#">#mùa hè</a></li>
                                <li><a href="#">#kệ</a></li>
                                <li><a href="#">#giảm giá</a></li>
                            </ul>
                        </div>
                        
                        <!--=======  End of ad tags  =======-->

                        <!--=======  ad-content  =======-->
                        
                        <div class="footer-banner-content">
                            <h2 class="mb-30">ĐỢT GIẢM GIÁ CUỐI CÙNG LÊN ĐẾN 40% CHO CÁC MẶT HÀNG. ĐỪNG BỎ LỠ!!!!!!!</h2>
                            <a href="shop-left-sidebar.html" class="lezada-button lezada-button--medium">MUA NGAY</a>
                        </div>
                        
                        <!--=======  End of ad-content  =======-->
                    </div>
                    
                    <!--=======  End of ad section  =======-->

                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of ad section area ======-->
@stop