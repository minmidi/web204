@extends('layout')
@section('content')
    <section id="topic-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="top-text-sizelg">Liên hệ</h1>
                </div>	<!-- End of /.col-md-4 -->
                <div class="col-md-8 hidden-xs">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li class="active">Liên hệ </li>
                    </ol>
                </div>	<!-- End of /.col-md-8 -->
            </div>	<!-- End of /.row -->
        </div>	<!-- End of /.container -->
    </section>	<!-- End of /#Topic-header -->




    <section id="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8294795366073!2d105.73570351492961!3d21.039507892787192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134548ae18731fd%3A0xea0ecefb9c8a3bb8!2zMTEwIMSQxrDhu51uZyBYdcOibiBQaMawxqFuZywgWHXDom4gUGjGsMahbmcsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1582087494402!5m2!1svi!2s" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="block">
                            <h4>Danh mục</h4>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fas fa-pizza-slice"></i>
                                    Pizza
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fas fa-utensils"></i>
                                    Foods
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fas fa-hamburger"></i>
                                    Fastfoods
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fas fa-beer"></i>
                                    Dinks
                                </a>
                            </div>
                        </div>
                        <div class="block">
                            <img src="images/food-ad.png" alt="">
                        </div>
                        <div class="block">
                            <h4>Đề xuất</h4>
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="images/post-img.png" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="media-heading">Lamb leg roast
                                            <p>Lorem ipsum dolor sit amet.</p></a>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="images/post-img-2.png" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="media-heading"> Lamingtons
                                            <p>Lorem ipsum dolor.</p></a>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="images/post-img-3.png" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="media-heading">
                                            Anzac Salad
                                            <p>Lorem ipsum dolor sit.</p>

                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="block">
                            <h4>Từ khoá</h4>
                            <div class="tag-link">
                                <a href="">Pizza</a>
                                <a href="">Hot dog</a>
                                <a href="">Trà sữa</a>
                                <a href="">Bánh Mỳ</a>
                            </div>
                        </div>
                    </div>	<!-- End of /.col-md-3 -->

                </div>	<!-- End of /.row -->
            </div>	<!-- End of /.container -->
    </section>	<!-- End of Section -->
@endsection
