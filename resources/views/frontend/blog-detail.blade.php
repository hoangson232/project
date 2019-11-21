@extends('master')
@section('titles','Chi tiết tin tức')
@section('main')
<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Tin tức</h1>

					<!--=======  breadcrumb list  =======-->
					
						<ul class="breadcrumb-list">
							<li class="breadcrumb-list__item"><a href="{{route('home')}}">Trang chủ</a></li>
							<li class="breadcrumb-list__item breadcrumb-list__item--active">Tin tức</li>
						</ul>
					
					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=======  End of breadcrumb area =======-->
    
    <!--=============================================
    =            blog page wrapper         =
    =============================================-->
    
    <div class="blog-page-wrapper mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  page sidebar  =======-->
						
                    <div class="page-sidebar">
                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                

                                <!--=======  widget post wrapper  =======-->
                                
                                <div class="widget-post-wrapper">
                                <!--=======  single widget post  =======-->
                                @foreach($blogssd as $bl)
                                <div class="single-widget-post">
                                    <div class="image">
                                        <img src="{{url('')}}/uploads/blog/{{$bl->image}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="widget-post-title"><a href="{{route('blog-detail',['slug'=>$bl->slug])}}">{{$bl->name}}</a></h3>
                                        <p class="widget-post-date">{{date_format($bl->created_at,"d/m/Y H:i:s")}}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!--=======  End of single widget post  =======-->

                                </div>
                                
                                <!--=======  End of widget post wrapper  =======-->
                            </div>
                            
                            <!--=======  End of single sidebar widget  =======-->

                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                <!--=======  blog sidebar banner  =======-->
                                
                                <div class="blog-sidebar-banner">
                                    <img src="assets/images/banners/ADS-blog.png" class="img-fluid" alt="">
                                </div>
                                
                                <!--=======  End of blog sidebar banner  =======-->
                            </div>
                            
                            <!--=======  End of single sidebar widget  =======-->

                        </div>
                        
                        <!--=======  End of page sidebar  =======-->
                </div>

                <div class="col-lg-9 order-1 order-lg-2 mb-md-70 mb-sm-70">
                    <div class="row">
                        
                        <div class="col-md-12 mb-40">
                            <div class="single-slider-post single-slider-post--sticky pb-60">
                                <!--=======  image  =======-->
                                
                                <div class="single-slider-post__image single-slider-post--sticky__image mb-30">
                                    <img src="{{url('')}}/uploads/blog/{{$blogd->image}}" class="" alt="" width="90%" height="400px">
                                </div>
                                
                                <!--=======  End of image  =======-->

                                <!--=======  content  =======-->
                                
                                <div class="single-slider-post__content single-slider-post--sticky__content">
                                    <!--=======  post category  =======-->
                                    
                                  
                                    
                                    <h2 class="post-title"><a href="#">{{$blogd->name}}</a></h2>

                                    <!--=======  End of post category  =======-->

                                    <!--=======  post info  =======-->
                                    
                                    <div class="post-info d-flex flex-wrap align-items-center mb-50">
                                        <div class="post-user">
                                            <i class="ion-android-person"></i> By
                                            <a href="blog-standard-left-sidebar.html"> Admin</a>
                                        </div>
                                        <div class="post-date mb-0 pl-30">
                                            <i class="ion-android-calendar"></i>
                                            <a href="blog-standard-left-sidebar.html">{{date_format($blogd->created_at,"d/m/Y H:i:s")}}</a>
                                        </div>
										
                                    </div>
                                    
                                    <!--=======  End of post info  =======-->
									
									
									<!--=======  single blog post section  =======-->
									
									<div class="single-blog-post-section">
										
										<p class="mb-30">{{$blogd->content}}</p>
										
									</div>
									
									<!--=======  End of single blog post section  =======-->


                                    
                                </div>
                                
                                <!--=======  End of content  =======-->
                            </div>
						</div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    

	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
@stop