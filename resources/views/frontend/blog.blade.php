@extends('master')
@section('titles','Tin tức LEZADA')
@section('main')
	
	<!--===== End of Header offcanvas about ======-->

	<!--=======  breadcrumb area =======-->

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
                <div class="col-lg-3 order-2 d-none">
                    <!--=======  page sidebar  =======-->
						
                    <div class="page-sidebar">
                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                <!--=======  search widget  =======-->
                                
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="search" placeholder="Search products ...">
                                        <button type="button"><i class="ion-android-search"></i></button>
                                    </form>
                                </div>
                                
                                <!--=======  End of search widget  =======-->
                            </div>
                            
                            
                            <!--=======  End of single sidebarwidget  =======-->

                            <!--=======  single sidebar widget  =======-->
                            
                            <div class="single-sidebar-widget mb-40">
                                

                                <!--=======  widget post wrapper  =======-->
                                
                                <div class="widget-post-wrapper">


                                </div>
                                
                                <!--=======  End of widget post wrapper  =======-->
                            </div>
                        
                            
                        
                            
                            <!--=======  End of single sidebar widget  =======-->
                        </div>
                        
                        <!--=======  End of page sidebar  =======-->
                </div>
                <div class="col-lg-12 order-1">
                    <div class="row">
                        @foreach($blognew as $blogg)
                        <div class="col-md-12 mb-60">
                            <div class="single-slider-post single-slider-post--list">
                                <!--=======  image  =======-->
                                
                                <div class="">
                                    <a href="{{route('blog-detail',['slug'=>$blogg->slug])}}">
                                        <img src="{{url('')}}/uploads/blog/{{$blogg->image}}" class="img-fluid" alt="" width="150px">
                                    </a>
                                </div>
                                
                                <!--=======  End of image  =======-->

                                <!--=======  content  =======-->
                                
                                <div class="single-slider-post__content single-slider-post--list__content">
                                    <div class="post-date">
                                        <i class="ion-android-calendar"></i>
                                        <a href="{{route('blog-detail',['slug'=>$blogg->slug])}}">{{$blogg->created_at}}</a>
                                    </div>
                                    <h2 class="post-title"><a href="{{route('blog-detail',['slug'=>$blogg->slug])}}">{{$blogg->name}}</a></h2>
                                    <p><a href="{{route('blog-detail',['slug'=>$blogg->slug])}}">{{$blogg->short_content}}</a></p>
                                    <a href="{{route('blog-detail',['slug'=>$blogg->slug])}}" class="blog-readmore-btn">Đọc thêm</a>
                                </div>
                                
                                <!--=======  End of content  =======-->
                            </div>
                        </div>
                          @endforeach                                      
                   </div>
	
                    <div class="row">
                        <div class="col-lg-12">
                            <!--=======  pagination  =======-->
                            
                        <div class="clearfix"></div>
							{{$blgs->links()}}
                            
                            <!--=======  End of pagination  =======-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of blog page wrapper  ======-->

	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
@stop