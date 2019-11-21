@extends('master')
@section('main')

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Mục ưa thích</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">Trang chủ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Mục ưa thích</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    
    <!--=============================================
	=            wishlist page content         =
    =============================================-->
   
    @if(Auth::check())
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
	<div class="shopping-cart-area mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  cart table  =======-->
					
					<div class="cart-table-container">
						<table class="cart-table">
							<thead>
								<tr>
                                    <th>STT</th>
									<th class="product-name" colspan="2">Sản phẩm</th>
									<th class="product-price">Giá</th>
									<th class="product-quantity">Giỏ hàng</th>
									<th class="product-subtotal">&nbsp;</th>
									<th class="product-remove">&nbsp;</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($list as $key=>$item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                        <td class="product-thumbnail">
                                            <a href="shop-product-basic.html">
                                            <img src="{{url('')}}/uploads/{{$item->product->image}}" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-basic.html">{{$item->product->name}}</a>
                                        </td>
    
                                    <td class="product-price"><span class="price">
                                        @if ($item->product->sale_price==0)
                                        {{number_format($item->product->price)}} Đ
                                        @else
                                        {{number_format($item->product->sale_price)}} Đ
                                        @endif
                                    </span></td>
    
                                        {{-- <td class="product-quantity">
                                            <div class="pro-qty d-inline-block mx-0">
                                                <input type="text" value="1">
                                            </div>
                                        </td> --}}
    
                                    <td class="add-to-cart"><button class="lezada-button lezada-button--small lezada-button--icon--left"> <i class="ion-ios-cart-outline"><a href="{{route('add_cart',['id'=>$item->product->id])}}">
                                            Thêm vào giỏ hàng</a></i></button></td>
    
                                        <td class="product-remove">
                                        <a href="{{route('delete_wishlist',['id'=>$item->id])}}">
                                                <i class="ion-android-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
								
							</tbody>
						</table>
					</div>
                    
                    <div class="col-lg-12 mb-80">
                            <!--=======  coupon area  =======-->
                            
                            <div class="cart-coupon-area pb-30">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 text-left text-lg-right">
                                        <!--=======  update cart button  =======-->
                                        
                                      
                                        
                                        <!--=======  End of update cart button  =======-->
                                    </div>
                                     <div class="col-lg-6 text-left text-lg-right">
                                        <!--=======  update cart button  =======-->
                                        
                                        <a href="{{route('delete_all')}}" class="btn btn-danger">Xóa hết</a>
                                        
                                        <!--=======  End of update cart button  =======-->
                                    </div>
        
                            
                                </div>
                            </div>
                            
                            <!--=======  End of coupon area  =======-->
                        </div>
					<!--=======  End of cart table  =======-->
				</div>
			</div>
		</div>
    </div>
    @else
    <h2>Bạn phải đăng nhập để xem tính năng này</h2>
    <a href="{{route('cus_login')}}">Đăng nhập</a>
    @endif
		
		<!--=====  End of wishlist page content  ======-->

@stop