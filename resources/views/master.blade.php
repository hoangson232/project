<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/lezada-preview/lezada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2019 14:25:11 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lezada - Multipurpose eCommerce Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="{{url('')}}/public/assets/images/favicon.ico">

	<!-- CSS
	============================================ -->
	<!-- Bootstrap CSS -->
	<link href="{{url('')}}/public/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome CSS -->
	<link href="{{url('')}}/public/assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Ionicons CSS -->
	<link href="{{url('')}}/public/assets/css/ionicons.min.css" rel="stylesheet">

	<!-- Themify CSS -->
	<link href="{{url('')}}/public/assets/css/themify-icons.css" rel="stylesheet">

	<!-- Plugins CSS -->
	<link href="{{url('')}}/public/assets/css/plugins.css" rel="stylesheet">

	<!-- Helper CSS -->
	<link href="{{url('')}}/public/assets/css/helper.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="{{url('')}}/public/assets/css/main.css" rel="stylesheet">

	<!-- Revolution Slider CSS -->
	<link href="{{url('')}}/public/assets/revolution/css/settings.css" rel="stylesheet">
	<link href="{{url('')}}/public/assets/revolution/css/navigation.css" rel="stylesheet">
	<link href="{{url('')}}/public/assets/revolution/custom-setting.css" rel="stylesheet">

	<!-- Modernizer JS -->
	<script src="{{url('')}}/public/assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body id="">

	
	<!--=============================================
	=            Header without topbar         =
	=============================================-->
	
	<header class="header header-without-topbar header-sticky">
		
		<!--=======  header bottom  =======-->
		
		<div class="header-bottom pt-md-40 pb-md-40 pt-sm-40 pb-sm-40">
			<div class="container wide">


					<!--=======  header bottom container  =======-->
					
					<div class="header-bottom-container">
						
						<!--=======  logo with off canvas  =======-->
						
						<div class="logo-with-offcanvas d-flex">
	
							
		
							<!--=======  logo   =======-->
							
							<div class="logo">
								<a href="{{route('home')}}">
									<img src="{{url('')}}/public/assets/images/logo.png" class="img-fluid" alt="">
								</a>
							</div>
							
							<!--=======  End of logo   =======-->
						</div>
						
						<!--=======  End of logo with off canvas  =======-->
	
						<!--=======  header bottom navigation  =======-->
						
						<div class="header-bottom-navigation">
							<div class="site-main-nav d-none d-lg-block">
								<nav class="site-nav center-menu">
									<ul>
										<li class="menu-item"><a href="{{route('home')}}">Trang chủ</a>											
										</li>
										<li class="menu-item-has-children"><a href=""> Danh mục</a>
											<ul class="sub-menu single-column-menu">
												@foreach($category as $cate)
												<li><a href="{{route('shop',['slug'=>$cate->slug])}}">{{$cate->name}}</a></li>
												@endforeach
											</ul>
										</li>
									
										<li class="menu-item"><a href="{{route('about')}}">Liên hệ</a>
										</li>

										<li class="menu-item "><a href="{{route('blog')}}">Tin tức</a>
										</li>
										<li class="menu-item-has-children"><a href="javascript:void(0)">Tài khoản</a>
											<ul class="sub-menu single-column-menu">
												@if(Auth::check())
												<li><a href="{{route('cus_change_pass')}}">Đổi mật khẩu</a></li>
												<li><a href="{{route('cart_history')}}">Lịch sử mua hàng</a></li>
												<li><a href="{{route('cus_logout')}}" onclick= "return confirm('Bạn có chắc ko?')">Đăng xuất</a></li>
												@else
												<li><a href="{{route('cus_login')}}">Đăng nhập</a></li>
												<li><a href="{{route('cus_add')}}">Đăng ký</a></li>
												@endif
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						
						<!--=======  End of header bottom navigation  =======-->

						<!--=======  headeer right container  =======-->

						
						<div class="header-right-container">

							<!--=======  header right icons  =======-->

							
							<div class="header-right-icons d-flex justify-content-end align-items-center h-100">
								@if(Auth::check())
								<div class="">									
									<span>Xin chào: {{Auth::user()->name}}</span>
								</div>
								@endif
								<!--=======  single-icon  =======-->
								
								<div class="single-icon search">
									<a href="javascript:void(0)" id="search-icon">
										<i class="ion-ios-search-strong"></i>
									</a>
								</div>
								
								<!--=======  End of single-icon  =======-->
								
									<!--=======  single-icon  =======-->
								<!--=======  single-icon  =======-->
								
								<div class="single-icon wishlist">
								<a href="{{route('show-wishlist')}}" id="">
										<i class="ion-android-favorite-outline"></i>
								<span class="count">{{$wishlist_count}}</span>
									</a>
								</div>
								
								<!--=======  End of single-icon  =======-->
								<!--=======  single-icon  =======-->
								
								<div class="single-icon cart">
									<a href="{{route('show_cart')}}" id="">
										<i class="ion-ios-cart"></i>
										@if(Auth::check())
										<span class="count">{{$carts->total_quantity}}</span>
										@else
										<span class="count">0</span>
										@endif
									</a>
								</div>
								<!--=======  End of single-icon  =======-->
							</div>
							<!--=======  End of header right icons  =======-->
		
						</div>
						
						<!--=======  End of headeer right container  =======-->
						
						
					</div>
					
					<!--=======  End of header bottom container  =======-->
					
			</div>
		</div>
	
		<!--=======  End of header bottom  =======-->
	</header>
	
    <!--===== End of Header without topbar ======-->


@yield('main')

 

    <!--=============================================
	=            footer three         =
	=============================================-->
	
	<div class="footer footer--three pt-90 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 footer-single-widget mb-md-50 mb-sm-50">
                    <!--=======  footer navigation  =======-->
                    
                    <div class="footer-nav-container footer-nav-container--horizontal mb-20">
                        <nav>
                            <ul>
                                <li><a href="{{route('about')}}">VỀ CHÚNG TÔI</a></li>
                                <li><a href="{{route('about')}}">ĐỊA ĐIỂM CỬA HÀNG</a></li>
                                <li><a href="{{route('about')}}">LIÊN HỆ</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!--=======  End of footer navigation  =======-->

                    <!--=======  copyright text  =======-->
                    
                    <div class="footer__copyright-text">
                        <p>&copy; 2019 lezada. All Rights Reserved | <span>(+00) 123 567990</span> | ph1906@gmail.com</p>
                    </div>
                    
                    <!--=======  End of copyright text  =======-->
                </div>
                <div class="col-lg-3 col-md-12 footer-single-widget text-left text-lg-right">

                    <!--=======  social icons  =======-->
                    
                    <div class="social-icons--footer mb-20">
                        <ul>
                            <li><a href="http://www.twitter.com/" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.facebook.com/" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.instagram.com/" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://www.youtube.com/" data-tippy="Youtube" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    
                    <!--=======  End of social icons  =======-->

                    <!--=======  payment icon  =======-->
                    
                    <div class="payment-icon">
                        <img src="{{url('')}}/public/assets/images/icons/pay.png" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of payment icon  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of footer three  ======-->
   <!--=======  search overlay  =======-->
    
    <div class="search-overlay" id="search-overlay">
        
        <!--=======  close icon  =======-->
        
        <span class="close-icon search-close-icon">
            <a href="javascript:void(0)"  id="search-close-icon">
                <i class="ti-close"></i>
            </a>
        </span>
        
        <!--=======  End of close icon  =======-->

        <!--=======  search overlay content  =======-->
        
        <div class="search-overlay-content">
            <div class="input-box">
                <form action="{{route('search_product')}}" method="GET" class="form-inline" role="form">
                
                	<div class="form-group">
                		<label class="sr-only" for="">Tìm kiếm</label>
                		<input name="search" class="form-control" id="" placeholder="Nhập giá hoặc tên">
                	</div>
                
             
                	<button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </form>
            </div>
            <div class="search-hint">
                <span># Ấn Enter để tìm hoặc Esc để thoát</span>
            </div>
        </div>
        
        <!--=======  End of search overlay content  =======-->
    </div>
    
    <!--=======  End of search overlay  =======-->
    
    <!--=====  End of overlay items  ======-->

    <!-- scroll to top  -->
        <a href="#" class="scroll-top"></a>
    <!-- end of scroll to top -->
        
  
    
        <!-- scroll to top  -->
        <a href="#" class="scroll-top"></a>
        <!-- end of scroll to top -->
    
        <!-- JS
        ============================================ -->
        <!-- jQuery JS -->
        <script src="{{url('')}}/public/assets/js/vendor/jquery.min.js"></script>
    
        <!-- Popper JS -->
        <script src="{{url('')}}/public/assets/js/popper.min.js"></script>
    
        <!-- Bootstrap JS -->
        <script src="{{url('')}}/public/assets/js/bootstrap.min.js"></script>
    
        <!-- Plugins JS -->
        <script src="{{url('')}}/public/assets/js/plugins.js"></script>
    
        <!-- Main JS -->
        <script src="{{url('')}}/public/assets/js/main.js"></script>
    
      
    
    </body>
    
    
<!-- Mirrored from demo.hasthemes.com/lezada-preview/lezada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2019 14:25:25 GMT -->
</html>