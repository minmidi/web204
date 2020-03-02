<!doctype html>
<html lang="en">

<head>
    <base href="{{asset('public/frontend')}}/">
    <meta charset="UTF-8">
    <title>home.html</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- jS -->
    <script src="js/all.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>


</head>

<body>


<!-- TOP HEADER Start
================================================== -->

<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-3 col-sm-5 col-md-6 col-lg-7">
                <p class="contact-action" style="margin-top: -10px"><i class="fa fa-phone"></i> +999333999 <strong style="margin-left: 15px"><i class="fa fa-envelope"></i> Goodfood@gmail.com</strong></p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 clearfix">
                <ul class="login-cart">
                    <li>
                        <a data-toggle="modal" data-target="#myModal" href="#">
                            <i class="fa fa-user"></i> Đăng nhập
                        </a>
                    </li>
                    <li>
                        <div class="cart dropdown">
                            <a data-toggle="dropdown" href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>

                            <div class="dropdown-menu dropup">
                                <span class="caret"></span>
                                <ul class="media-list">
                                    <li class="media">
                                        <img class="pull-left" src="images/product-item.jpg" alt="">
                                        <div class="media-body">
                                            <h6>Mỳ ý
                                                <span>$250</span>
                                            </h6>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm">Thanh toán</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                <form action="{{URL::to('/tim-kiem')}}" method="POST">
                    {{csrf_field()}}
                <div class="search-box">
                    <div class="input-group">
                        <input placeholder="Tìm kiếm" type="text" class="form-control">
                        <span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span>
                    </div>
                    <!-- /.input-group -->
                </div>
                </form>
                <!-- /.search-box -->
            </div>
        </div>
        <!-- End Of /.row -->
    </div>
    <!-- End Of /.Container -->


    <!-- MODAL Start
    ================================================== -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">ĐĂNG NHẬP</h4>
                </div>
                <div class="modal-body clearfix">

                    <form action="#" method="post" id="create-account_form" class="std">
                        <fieldset>
                            <h3>Tạo tài khoản</h3>
                            <div class="form_content clearfix">
                                <h4>Nhập địa chỉ E-mail / số điện thoại</h4>
                                <p class="text">
                                    <label for="email_create">Địa chỉ E-mail</label>
                                    <span>
											<input placeholder="Nhập địa chỉ E-mail"  type="text" id="email_create" name="email_create" value="" class="account_input">
					                    </span>
                                </p>
                                <p class="submit">
                                    <button class="btn btn-primary">Tạo tài khoản</button>
                                </p>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" method="post" id="login_form" class="std">
                        <fieldset>
                            <h3>Bạn đã có tài khoản?</h3>
                            <div class="form_content clearfix">
                                <p class="text">
                                    <label for="email">Địa chỉ E-mail</label>
                                    <span><input placeholder="Địa chỉ E-mail" type="text" id="email" name="email" value="" class="account_input"></span>
                                </p>
                                <p class="text">
                                    <label for="passwd">Mật Khẩu</label>
                                    <span><input placeholder="Mật Khẩu" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
                                </p>
                                <p class="lost_password">
                                    <a href="#popab-password-reset" class="popab-password-link">Quên mật khẩu?</a>
                                </p>
                                <p class="submit">
                                    <button class="btn btn-success">Đăng nhập</button>
                                </p>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of /Section -->



<!-- LOGO Start
================================================== -->

<header>
    <div class="container img-responsive">
        <div class="row">
            <div class="col-xs-12">
                <a href="#">
                    <img src="images/logotop.png" alt="logo">
                </a>
            </div>
            <!-- End of /.col-md-12 -->
        </div>
        <!-- End of /.row -->
    </div>
    <!-- End of /.container -->
</header>
<!-- End of /Header -->




<!-- MENU Start
================================================== -->

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- End of /.navbar-header -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-main">
                <li class="active"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                <li><a href="{{URL::to('/san-pham')}}">Cửa hàng</a></li>
                <li class="dropdown">
                    <a href="#">
                        Thương hiệu
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($brand as $key => $brand)
                            <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_slug)}}">{{$brand->brand_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <!-- End of /.dropdown -->
                <li><a href="#">Bài viết</a></li>
                <li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>



            </ul>
            <!-- End of /.nav-main -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- End of /.nav -->


<!-- SLIDER Start
================================================== -->

@yield('content')




<!-- FOOTER Start
================================================== -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block clearfix">
                    <a href="#">
                        <img src="images/logobot.png" alt="">
                    </a>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <h4 class="connect-heading">Liên hệ</h4>
                    <ul class="social-icon">
                        <li class="social-icon-border">
                            <a class="contact-icon" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a class="contact-icon" href="#">
                                <i class="fab fa-instagram-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="contact-icon" href="#">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a class="contact-icon" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="contact-icon" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Of /.social-icon -->
                </div>
                <!-- End Of /.block -->
            </div>
            <!-- End Of /.Col-md-4 -->
            <div class="col-md-4">
                <div class="block">
                    <h4>Địa chỉ</h4>
                    <p><i class="fa  fa-map-marker"></i> <span>PIZZA MAN</span>110 Xuân Phương, Từ Liêm, Hà Nội</p>
                    <p> <i class="fa  fa-mobile"></i> <span>Điện thoại:</span> 0968411721 </p>
                    <p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>pizzaman@gmail.com</span></p>
                </div>
                <!-- End Of /.block -->
            </div>
            <!-- End Of Col-md-3 -->
            <div class="col-md-4">
                <div class="block">
                    <h4>Xem nhiều hơn</h4>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/product-item.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/product-item.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/product-item.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/product-item.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/product-item.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/product-item.jpg" alt="...">
                        </a>
                    </div>
                    <!-- End Of /.media -->
                </div>
                <!-- End Of /.block -->
            </div>
            <!-- End Of Col-md-3 -->
        </div>
        <!-- End Of /.row -->
    </div>
    <!-- End Of /.Container -->



    <!-- FOOTER-BOTTOM Start
================================================== -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="cash-out pull-left">
                        <li>
                            <a href="#">
                                <img src="images/American-Express.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/PayPal.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/Maestro.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/Visa.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/Visa-Electron.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <p class="copyright-text pull-right">Dự án mẫu nhóm 1</p>
                </div>
                <!-- End Of /.col-md-12 -->
            </div>
            <!-- End Of /.row -->
        </div>
        <!-- End Of /.container -->
    </div>
    <!-- End Of /.footer-bottom -->
</footer>
<!-- End Of Footer -->

<a id="back-top" href="#"></a>
</body>

</html>
