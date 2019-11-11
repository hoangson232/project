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
                                    <th class="product-name" colspan="2">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($cart as $item)
                                    <form action="{{route('update-cart',['id'=>$item['id']])}}">
                                        
                                   
                                    <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td class="product-thumbnail">
                                        <a href="{{route('pro_detail',['id'=>$item['id']])}}">
                                            <img src="{{url('')}}/uploads/{{$item['image']}}" class="img-fluid" alt="">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="shop-product-basic.html">{{$item['name']}}</a>
                                        <span class="product-variation">Color: Black</span>
                                    </td>

                                    <td class="product-price"><span class="price">{{$item['price']}}</span></td>

                                    <td class="product-quantity">
                                        <div class="pro-qty d-inline-block mx-0">
                                            <input type="text" value="{{$item['quantity']}}" name="quantity">
                                        </div>
                                    </td>

                                    <td class="total-price"><span class="price">{{number_format($item['price']*$item['quantity'])}}</span></td>

                                    <td class="product-remove">
                                        <a href="{{route('delete-cart',['id'=>$item['id']])}}">
                                            <i class="ion-android-close"></i>
                                        </a>
                                    </td>
                                    <td class="">
                                        <button type="submit" class="btn btn-info">Update</button>
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
                            <div class="col-lg-6 mb-md-30 mb-sm-30">
                                <!--=======  coupon form  =======-->
                                
                                <div class="lezada-form coupon-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-7 mb-sm-10">
                                                <input type="text" placeholder="Enter your coupon code">
                                            </div>
                                            <div class="col-md-5">
                                                <button class="lezada-button lezada-button--medium">apply coupon</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <!--=======  End of coupon form  =======-->
                           
                            </div>
                             <div class="col-lg-6 text-left text-lg-right">
                                <!--=======  update cart button  =======-->
                                
                                <a href="{{route('delete-all')}}" class="btn btn-danger">Delete All</a>
                                
                                <!--=======  End of update cart button  =======-->
                            </div>

                    
                        </div>
                    </div>
                    
                    <!--=======  End of coupon area  =======-->
                </div>
                    
                <div class="col-xl-4 offset-xl-8 col-lg-5 offset-lg-7">
                    <div class="cart-calculation-area">
                        <h2 class="mb-40">Cart totals</h2>

                        <table class="cart-calculation-table mb-30">
                            
                            <tr>
                                <th>TOTAL</th>
                                <td class="total">{{number_format($carts->total_price)}}</td>
                            </tr>
                        </table>

                        <div class="cart-calculation-button text-center">
                            <button class="lezada-button lezada-button--medium"><a href="{{route('shop_checkout')}}">proceed to checkout</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of cart page content  ======-->
    
@stop