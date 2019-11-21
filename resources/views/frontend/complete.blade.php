@extends('master')
@section('titles','Đặt hàng thành công')
@section('main')
	<div class="">
			
				<h1 style="text-align: center;background-color: #01DFD7">
					Chúc Mừng Bạn Đã Đặt Hàng Thành Công
				</h1>
				
				<img src="{{url('')}}/public/assets/images/slider/sdd.png" width="300px" style="margin-left: 41%; ">
				<p style="text-align: center;margin-top: 20px;text-transform: uppercase;font-weight:bold;color:black">Cảm ơn bạn <span style="color:red">{{Auth::user()->name}}</span> đã đặt hàng tại nội Thất LEZADA</p>
				<p style="text-align: center;margin-top: 20px;text-transform: uppercase;font-weight:bold;color:black">Chúng tôi sẽ liên hệ cho ban trong vòng <span style="color: red">15 phút</span> và cam kết giao hàng miễn phí trên toàn quốc</p>
				<p style="text-align: center;margin-top: 20px;text-transform: uppercase;font-weight:bold;color:black">
					Tư vấn bán hàng <span style="color: red">0349207558</span> (08:00am - 20:00pm)
				</p>
				<p style="text-align: center;margin-top: 20px;text-transform: uppercase;font-weight:bold;color:blue">
					<a href="{{route('home')}}">Mời bạn quay về trang chủ để tiếp tục mua hàng</a>
				</p>
	</div>
@stop