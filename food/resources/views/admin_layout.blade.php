<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/css/styles.css')}}"rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('public/backend/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/backend/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#">Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{('public/backend/images/3.png')}}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"> <span class="username">
                	<?php
                    $name = Session::get('admin_name');
                    if($name){
                        echo $name;

                    }
                    ?>

                </span></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="dashboard"><em class="fa fa-dashboard">&nbsp;</em> Tổng quan</a></li>

        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-cart-arrow-down">&nbsp;</em> Đơn hàng<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{URL::to('/manage-order')}}">
                        <span>&nbsp;Quản lý đơn hàng</span>
                    </a></li>

            </ul>
        </li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em> Danh mục<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="{{URL::to('/add-category-product')}}">
                        <span>&nbsp;Thêm người danh mục</span>
                    </a></li>
                <li><a class="" href="{{URL::to('/all-category-product')}}">
                        <span>Danh sách danh mục</span>
                    </a></li>
            </ul>
        </li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
                <em class="fa fa-navicon">&nbsp;</em> Thương hiệu<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
            </a>
            <ul class="children collapse" id="sub-item-3">
                <li><a class="" href="{{URL::to('/add-brand-product')}}">
                        <span>&nbsp;Thêm thương hiệu</span>
                    </a></li>
                <li><a class="" href="{{URL::to('/all-brand-product')}}"">
                        <span>Danh sách thương hiệu</span>
                    </a></li>
            </ul>
        </li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
                <em class="fa fa-cutlery">&nbsp;</em> Sản phẩm<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
            </a>
            <ul class="children collapse" id="sub-item-4">
                <li><a class="" href="{{URL::to('/add-product')}}"">
                        <span>&nbsp;Thêm sản phẩm</span>
                    </a></li>
                <li><a class="" href="{{URL::to('/all-product')}}"">
                        <span>Danh sách sản phẩm</span>
                    </a></li>
            </ul>
        </li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-5">
                <em class="fa fa-users">&nbsp;</em> Người dùng<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
            </a>
            <ul class="children collapse" id="sub-item-5">
                <li><a class="" href="{{URL::to('/add-user')}}"">
                        <span>&nbsp;Thêm người dùng</span>
                    </a></li>
                <li><a class="" href="{{URL::to('/all-user')}}"">
                        <span>Danh sách người dùng</span>
                    </a></li>
            </ul>
        </li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-6">
                <em class="fa fa-motorcycle">&nbsp;</em> Shipper<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
            </a>
            <ul class="children collapse" id="sub-item-6">
                <li><a class="" href="{{URL::to('/add-shipper')}}">
                        <span>&nbsp;Thêm shipper</span>
                    </a></li>
                <li><a class="" href="{{URL::to('/all-shipper')}}">
                        <span>Danh sách shipper</span>
                    </a></li>
            </ul>
        </li>

        <li><a href="{{URL::to('/logout')}}"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard test</li>
        </ol>
    </div><!--/.row-->

    <section class="wrapper">
        @yield('admin_content')
    </section>







</div>	<!--/.main-->

<script src="{{asset('public/backend/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/backend/js/chart.min.js')}}"></script>
<script src="{{asset('public/backend/js/chart-data.js')}}"></script>
<script src="{{asset('public/backend/js/easypiechart.js')}}"></script>
<script src="{{asset('public/backend/js/easypiechart-data.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('public/backend/js/custom.js')}}"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>