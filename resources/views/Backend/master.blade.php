<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin |  @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/public/admin')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/public/admin')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/public/admin')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('/public/admin')}}/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('/public/admin')}}/css/style.css" />
  <script type="text/javascript">
    var base_url = function(){
      return "{{url('')}}";
    }
    var akey = function(){
      return 'JAVEgEj3qM6qspjXz7HvcMHyKubBWJXU2vxBcgMmXo';
    }
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <ul class="nav navbar-nav navbar-right" style="margin-right: 10px">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Xin chào: {{Auth::user()->name}} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('user_change_pass')}}">Thay đổi mật khẩu</a></li>
            <li><a href="{{route('user_logout')}}" onclick="return confirm('Bạn có chắc không ?')">Thoát tài khoản</a></li>
          </ul>
        </li>
      </ul>

    </nav>
  </header>
  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li>
          <a href="{{route('admin')}}">
            <i class="fa fa-th"></i> <span>Trang chủ quản trị</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý danh mục</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('cat')}}"><i class="fa fa-circle-o"></i> Danh mục sản phẩm</a></li>
            <li><a href="{{route('cat_add')}}"><i class="fa fa-circle-o"></i> Thêm mới danh mục</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý sản phẩm</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">{{$product_count}}</small>
              </span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('pro')}}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
            <li><a href="{{route('pro_add')}}"><i class="fa fa-circle-o"></i> Thêm mới sản phẩm</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý đơn hàng</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">{{$od_count}}</small>
              </span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('order_list')}}"><i class="fa fa-circle-o"></i> Danh sách đơn hàng
              <span class="pull-right-container">
              <small class="label pull-right bg-blue">{{$od_count_all}}</small>
              </span>
            </a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Theo dõi sản phẩm</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý tài khoản admin</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-black-active">{{$admin_count}}</small>
            </span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>

          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('account')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
            <li><a href="{{route('account_add')}}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
            
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý tài khoản khách</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">{{$user_count}}</small>
              </span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('cus_account')}}"><i class="fa fa-circle-o"></i> Danh sách
              <span class="pull-right-container">
              <small class="label pull-right bg-yellow">{{$user_count}}</small>
              </span></a></li>
            <li><a href="{{route('cus_account_add')}}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>           
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý tin tức</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
              </span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list-blog')}}"><i class="fa fa-circle-o"></i> Danh sách
              <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
              </span></a></li>
            <li><a href="{{route('add-blog')}}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>           
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý banner</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
              </span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list-banner')}}"><i class="fa fa-circle-o"></i> Danh sách
              <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
              </span></a></li>
            <li><a href="{{route('add-banner')}}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>           
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý bình luận</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
              </span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('comment')}}"><i class="fa fa-circle-o"></i> Danh sách
              <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
              </span></a></li>
                      
          </ul>
        </li>
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          
        </div>
        <div class="box-body">
         @yield('main')
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('/public/admin')}}/js/jquery.min.js"></script>
<script src="{{url('/public/admin')}}/js/bootstrap.min.js"></script>
<script src="{{url('/public/admin')}}/js/adminlte.min.js"></script>
@yield('js')


</body>
</html>
