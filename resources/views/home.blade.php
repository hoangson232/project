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

            @foreach ($bannernew as $item)
                 <!--=======  single slider  =======-->
            <div class="decor-single-slider">
                <div class="decor-single-slider-content">
                <!--=======  slider image  =======-->
                
                <div class="slider-image">
                <img src="{{url('')}}/uploads/banner/{{$item->image}}" class="img-fluid" alt="" >

                </div>
                
                <!--=======  End of slider image  =======-->

                <!--=======  slider content  =======-->
                
                <div class="slider-content">
                    {{-- <div class="color-title color-title--blue">
                        
                    </div> --}}

                    <div class="main-title">
                        {{$item->content}}
                    </div>

                    {{-- <a href="shop-left-sidebar.html" class="lezada-button lezada-button--medium">mua ngay</a> --}}
                </div>
                
                <!--=======  End of slider content  =======-->
                </div>
            </div>
            
            <!--=======  End of single slider  =======-->

            @endforeach
           



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
                            <a class="nav-item nav-link active " id="product-tab-1" data-toggle="tab" href="#product-series-1" role="tab" aria-selected="true">tất cả</a>
                            <a class="nav-item nav-link " id="product-tab-2" data-toggle="tab" href="#product-series-2" role="tab" aria-selected="false">mới về</a>
                            <a class="nav-item nav-link" id="product-tab-3" data-toggle="tab" href="#product-series-3" role="tab" aria-selected="false">giảm giá</a>
                        </div>
                    </div>
                    
                    <!--=======  End of tab product navigation  =======-->
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

                    <!--=======  tab product content  =======-->
                    
                    <div class="tab-content"  id="nav-tabContent2">
                        <div class="tab-pane fade show active" id="product-series-1" role="tabpanel" aria-labelledby="product-tab-1">
                            <div class="row">
                                @foreach($product as $value)
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="{{route('pro_detail',['slug'=>$value->slug])}}">
                                            <img src="{{url('')}}/uploads/{{$value->image}}" class="img-fluid" alt="" width="100px">
                                            <img src="{{url('')}}/uploads/{{$value->image}}" class="img-fluid" alt="" width="100px">
                                        </a>
                
                                        @if($value->sale_price >0)
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">Sale</span>
                                        </div>
                                        @endif
                                        
                                        <div class="single-product__floating-icons">
                                            @if (Auth::check())
                                            <span class="wishlist"><a href="{{route('add_wishlist',['account_id'=>Auth::user()->id,'product_id'=>$value->id])}}" data-tippy="Thêm vào mục ưa thích" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            @else
                                            <span class="wishlist" onclick="return alert('Bạn phải đăng nhập để sử dụng tính năng này')"><a href="" data-tippy="Thêm vào mục ưa thích" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            @endif
                                            <span class="quickview"><a class="" href="{{route('pro_detail',['slug'=>$value->slug])}}" data-tippy="Xem chi tiết" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">{{$value->name}}</a></h3>
                                            @if(Auth::check())
                                            <a href="{{route('add_cart',['id'=>$value->id])}}">Thêm vào giỏ hàng</a>
                                            @else
                                            <a href="" onclick="return confirm('Bạn cần đăng nhập để mua hàng')">Thêm vào giỏ hàng</a>
                                            @endif
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
                
                                        @if($value->sale_price >0)
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">Sale</span>
                                        </div>
                                        @endif
                                        
                                        <div class="single-product__floating-icons">
                                            @if (Auth::check())
                                            <span class="wishlist"><a href="{{route('add_wishlist',['account_id'=>Auth::user()->id,'product_id'=>$value->id])}}" data-tippy="Thêm vào mục ưa thích" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            @else
                                            <span class="wishlist" onclick="return alert('Bạn phải đăng nhập để sử dụng tính năng này')"><a href="" data-tippy="Thêm vào mục ưa thích" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            @endif
                                            <span class="quickview"><a class="" href="{{route('pro_detail',['slug'=>$value->slug])}}" data-tippy="Xem chi tiết" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">{{$value->name}}</a></h3>
                                            @if(Auth::check())
                                            <a href="{{route('add_cart',['id'=>$value->id])}}">Thêm vào giỏ hàng</a>
                                            @else
                                            <a href="" onclick="return confirm('Bạn cần đăng nhập để mua hàng')">Thêm vào giỏ hàng</a>
                                            @endif
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

                        <div class="tab-pane fade" id="product-series-3" role="tabpanel" aria-labelledby="product-tab-3">
                            <div class="row">
                                @foreach($productSale as $value)
                                <!--=======  single product  =======-->
                                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-45">
                                    <div class="single-product">
                                    <!--=======  single product image  =======-->
                                    
                                    <div class="single-product__image">
                                        <a class="image-wrap" href="{{route('pro_detail',['slug'=>$value->slug])}}">
                                            <img src="{{url('')}}/uploads/{{$value->image}}" class="img-fluid" alt="" width="100px">
                                            <img src="{{url('')}}/uploads/{{$value->image}}" class="img-fluid" alt="" width="100px">
                                        </a>
                                        @if($value->sale_price >0)
                                        <div class="single-product__floating-badges">
                                            <span class="onsale">Sale</span>
                                        </div>
                                        @endif
                                        <div class="single-product__floating-icons">
                                                @if (Auth::check())
                                                <span class="wishlist"><a href="{{route('add_wishlist',['account_id'=>Auth::user()->id,'product_id'=>$value->id])}}" data-tippy="Thêm vào mục ưa thích" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                                @else
                                                <span class="wishlist" onclick="return alert('Bạn phải đăng nhập để sử dụng tính năng này')"><a href="" data-tippy="Thêm vào mục ưa thích" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                                @endif
                                            <span class="quickview"><a class="" href="{{route('pro_detail',['slug'=>$value->slug])}}" data-tippy="Xem chi tiết" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">{{$value->name}}</a></h3>
                                            @if(Auth::check())
                                            <a href="{{route('add_cart',['id'=>$value->id])}}">Thêm vào giỏ hàng</a>
                                            @else
                                            <a href="" onclick="return confirm('Bạn cần đăng nhập để mua hàng')">Thêm vào giỏ hàng</a>
                                            @endif
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
    
    <!--=====  End of ad section area ======-->
@stop