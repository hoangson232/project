@extends('master')
@section('main')
	   <!--=======  breadcrumb area =======-->

    <div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="breadcrumb-title">GIỎ HÀNG</h1>

                    <!--=======  breadcrumb list  =======-->
                    
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-list__item"><a href="{{route('home')}}">TRANG CHỦ</a></li>
                            <li class="breadcrumb-list__item breadcrumb-list__item--active">Giỏ hàng</li>
                        </ul>
                    
                    <!--=======  End of breadcrumb list  =======-->

                </div>
            </div>
        </div>
    </div>
    
    <!--=======  End of breadcrumb area =======-->
    
    <!--=============================================
    =            cart page content         =
    =============================================-->
    
    <div class="shopping-cart-area mb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <!--=======  cart table  =======-->
                    
                    <div class="cart-table-container">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th class="product-name" >STT</th>
                                    <th class="product-name" colspan="2">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($cart as $key=>$item)
                                    <form action="{{route('update_cart',['id'=>$item['id']])}}">
                                        
                                   
                                    <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td class="product-thumbnail">
                                        <a href="{{route('pro_detail',['id'=>$item['id']])}}">
                                            <img src="{{url('')}}/uploads/{{$item['image']}}" class="img-fluid" alt="">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="shop-product-basic.html">{{$item['name']}}</a>
                                    </td>

                                    <td class="product-price"><span class="price">{{$item['price']}}</span></td>

                                    <td class="product-quantity">
                                        <div class="pro-qty d-inline-block mx-0">
                                            <input type="text" value="{{$item['quantity']}}" name="quantity">
                                        </div>
                                    </td>

                                    <td class="total-price"><span class="price">{{number_format($item['price']*$item['quantity'])}}</span></td>

                                    <td class="product-remove">
                                        <a href="{{route('delete_cart',['id'=>$item['id']])}}">
                                            <i class="ion-android-close"></i>
                                        </a>
                                    </td>
                                    <td class="">
                                        <button type="submit" class="btn btn-info">Cập nhật</button>
                                    </td>
                                </tr>
                                    
                                 </form>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!--=======  End of cart table  =======-->
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
                    
                <div class="col-xl-4 offset-xl-8 col-lg-5 offset-lg-7">
                    <div class="cart-calculation-area">
                        

                        <table class="cart-calculation-table mb-30">
                            
                            <tr>
                                <th>Tổng tiền</th>
                                <td class="total">{{number_format($carts->total_price)}}</td>
                            </tr>
                        </table>

                        <div class="cart-calculation-button text-center">
                            <button class="lezada-button lezada-button--medium"><a href="{{route('shop_checkout')}}">Xác nhận giỏ hàng</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of cart page content  ======-->
    
@stop