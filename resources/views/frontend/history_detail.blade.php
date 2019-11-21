@extends('master')
@section('main')

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Chi tiết lịch sử mua hàng</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">Trang chủ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Chi tiết lịch sử mua hàng</li>
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
	
	<div class="shopping-cart-area mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  cart table  =======-->
					
					<div class="cart-table-container">
						<table class="cart-table">
							<thead>
								<tr>
                                    <th class="product-name">STT</th>
									<th class="product-name">Tên sản phẩm</th>
									<th class="product-name">Ảnh sản phẩm</th>
									<th class="product-price">Số lượng</th>
									<th class="product-quantity">Đơn giá</th>
									<th class="product-subtotal">&nbsp;</th>
									<th class="product-remove">&nbsp;</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($detail as $item)
                                <tr>
                                        <td class="product-thumbnail">
                                        <p>{{$loop->index+1}}</p>
                                            </td>
                                        <td class="">
                                        <p>{{$item->pro->name}}</p>
                                        </td>
                                        <td class="">
                                        <p><img src="{{url('')}}/uploads/{{$item->pro->image}}" alt="" width="50px"></p>
                                        </td>
                                        <td class="product-name">
                                        <p>{{$item->quantity}}</p>
                                        </td>
    
                                        <td class="product-price">
                                        <p>{{number_format($item->price)}} VND</p>
                                        </td>
    
                                    {{-- <td class="add-to-cart">
                                        <button class="lezada-button lezada-button--small lezada-button--icon--left"> 
                                            <i class="">
                                                <a href="{{route('history_detail',['id'=>$item->id])}}">
                                            Xem chi tiết</a></i></button>
                                    </td> --}}
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
    <p>Bạn phải đăng nhập để xem tính năng này</p>
    <a href="{{route('cus_login')}}">Đăng nhập</a>
    @endif
		
		<!--=====  End of wishlist page content  ======-->

@stop