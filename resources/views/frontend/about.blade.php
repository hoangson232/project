@extends('master')
@section('titles','Liên Hệ LEZADA')
@section('main')

	<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Nội Thất LEZADA</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">Trang Chủ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Liên hệ</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    
	<!--=============================================
	=            section title  container      =
	=============================================-->
	
	<div class="section-title-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->
					
					<div class="section-title section-title--one text-center">
						<h1>Thông tin liên hệ</h1>
					</div>
					
					<!--=======  End of section title  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of section title container ======-->
	

	<!--=============================================
	=            icon box area         =
	=============================================-->
	
	<div class="icon-box-area mb-100 mb-md-30 mb-sm-30">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-md-70 mb-sm-70">
					<!--=======  single icon box  =======-->
					
					<div class="single-icon-box">
						<div class="icon-box-icon">
							<i class="ion-location"></i>
						</div>
						<div class="icon-box-content">
							<h3 class="title">Địa Chỉ</h3>
							<p class="content">Tầng 14 tòa N01T3 Khu Ngoại Giao Đoàn(Xuân Tảo Bắc Từ Liêm)</p>
						</div>
					</div>
					
					<!--=======  End of single icon box  =======-->
				</div>
				<div class="col-md-4 mb-md-70 mb-sm-70">
					<!--=======  single icon box  =======-->
					
					<div class="single-icon-box mb-10">
						<div class="icon-box-icon">
							<i class="ion-ios-telephone"></i>
						</div>
						<div class="icon-box-content">
							<h3 class="title">Số Điện Thoại</h3>
							<p class="content">Mobile: 0349207558<span>Hotline: 1800 – 1102</span></p>
						</div>
					</div>
					
					<div class="single-icon-box">
						<div class="icon-box-icon">
							<i class="ion-ios-email"></i>
						</div>
						<div class="icon-box-content">
							<p class="content">	Mail: ph1906ij@gmail.com </p>
						</div>
					</div>
					
					<!--=======  End of single icon box  =======-->
				</div>
				<div class="col-md-4 mb-md-70 mb-sm-70">
					<!--=======  single icon box  =======-->
					
					<div class="single-icon-box">
						<div class="icon-box-icon">
							<i class="ion-ios-clock-outline"></i>
						</div>
						<div class="icon-box-content">
							<h3 class="title">Giờ Hoạt Động</h3>
							<p class="content">thứ 2 – thứ 6 : 09:00 – 20:00<span>thứ 7 & chủ nhật: 10:30 – 22:00</span></p>
						</div>
					</div>
					
					<!--=======  End of single icon box  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of icon box area  ======-->

	<!--=============================================
	=            box layout map         =
	=============================================-->
	
	<div class="box-layout-map-area mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  box layout map container  =======-->
					
					<div class="box-layout-map-container">
						<div class="google-map" id="google-map-one">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7446.373187261413!2d105.79173082274284!3d21.06520840579124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aada263c5f0b%3A0xed4eeedccd080387!2zS2h1IE5nb-G6oWkgZ2lhbyDEkW_DoG4sIFh1w6JuIFThuqNvLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1573872030831!5m2!1svi!2s" width="1200" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>
					
					<!--=======  End of box layout map container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of box layout map  ======-->
	
	
@stop