@extends('master')
@section('main')

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-2 pt-50 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Kết quả tìm kiếm cho "{{$req->search}}"</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
                        <li class="breadcrumb-list__item"><a href="{{route('home')}}">TRANG CHỦ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">KẾT QUẢ TÌM KIẾM</li>
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
    
    <div class="shop-page-wrapper">

        <!--=======  shop page header  =======-->
        
        <div class="shop-page-header">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-12 col-lg-7 col-md-10 d-none d-md-block">
                        <!--=======  fitler titles  =======-->
					<div class="filter-title filter-title--type-two">
                        <ul class="product-filter-menu">
                            <li class="active" data-filter = "*">Đã tìm thấy {{count($product)}} sản phẩm</li>
                        </ul>
                    </div>
                    <!--=======  End of fitler titles  =======-->
                    </div>

                </div>
            </div>
        </div>
        
        <!--=======  End of shop page header  =======-->
		
		<!--=============================================
		=            shop page content         =
		=============================================-->
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
		<div class="shop-page-content mt-100 mb-100">
			<div class="container">
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
                                            @if(Auth::check())
                                            <span class="wishlist"><a href="{{route('add_wishlist',['account_id'=>Auth::user()->id,'product_id'=>$value->id])}}" data-tippy="Thêm vào mục ưa thích" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" data-tippy-placement = "left" ><i class="ion-android-favorite-outline"></i></a></span>
                                            @endif
                                            <span class="quickview"><a class="" href="{{route('pro_detail',['slug'=>$value->slug])}}" ><i class="ion-ios-search-strong"></i></a></span>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of single product image  =======-->
                
                                    <!--=======  single product content  =======-->
                            
                                    <div class="single-product__content">
                                        <div class="title">
                                            <h3> <a href="shop-product-basic.html">{{$value->name}}</a></h3>
                                            <a href="{{route('add_cart',['id'=>$value->id])}}">Thêm vào giỏ hàng</a>
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
		
		<!--=====  End of shop page content  ======-->
    </div>
    
    <!--=====  End of shop page content  ======-->
@stop