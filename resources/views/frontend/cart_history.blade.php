@extends('master')
@section('main')

	<!--=======  breadcrumb area =======-->

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Lịch sử mua hàng</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">Trang chủ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Lịch sử mua hàng</li>
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
                                    <th class="product-name">STT</th>
									<th class="product-name">Mã đơn hàng</th>
									<th class="product-price">Ngày đặt hàng</th>
									<th class="product-quantity">Tổng tiền</th>
									<th class="product-quantity">Trạng thái đơn hàng</th>
									<th class="product-subtotal">&nbsp;</th>
									<th class="product-remove">&nbsp;</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($history as $key=>$item)
                                <tr>
                                        <td class="product-thumbnail">
                                        <p>{{ $history->firstItem() + $key }}</p>
                                            </td>
                                        <td class="">
                                        <p>{{$item->id}}</p>
                                        </td>
                                        <td class="product-name">
                                        <p>{{date_format($item->created_at,"d/m/Y H:i:s")}}</p>
                                        </td>
    
                                    <td class="product-price">
                                    <p>{{number_format($item->total_price)}} VND</p>
                                    </td>
                                    <td class="product-price">
                                        @if ($item->status==0)
                                        <p>Đang xử lý</p>
                                        @elseif ($item->status==1)
                                        <p>Đang giao hàng</p>
                                        @elseif ($item->status==2)
                                        <p>Đã giao hàng</p>
                                        @else 
                                        <p>Đã hủy</p>
                                        @endif
                                        
                                    </td>
    
                                    <td class="add-to-cart">
                                        <button class="lezada-button lezada-button--small lezada-button--icon--left"> 
                                            <i class="">
                                                <a href="{{route('history_detail',['id'=>$item->id])}}">
                                            Xem chi tiết</a></i></button>
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
                                    <div class="clearfix">
                                        {{$history->links()}}
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