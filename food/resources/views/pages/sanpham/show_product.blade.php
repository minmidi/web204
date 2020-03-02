
@extends('layout')
@section('content')
<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="products-heading">
                    <h2>Thực đơn</h2>
                </div>
            </div>
        </div>
        @foreach($all_product as $key => $product)
            <div class="row">
                <div class="col-md-3">
                    <div class="products">
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_slug)}}">
                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                        </a>
                        <a href="single-product.html">
                            <h4>{{$product->product_name}}</h4>
                        </a>
                        <p class="price">Giá: <del class="price-old">{{number_format($product->product_price).' '.'VNĐ'}}</p>
                        <div>
                            <a class="view-link shutter" href="#"> Mua ngay</a>
                        </div>
                        <div>
                            <a class="view-link shutter" href="#">
                                <i class="fa fa-plus-circle"></i>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <!-- End of /.products -->

                </div>
                <!-- End Of /.Col-md-3 -->
            </div>
            <!-- End of /.row -->
        @endforeach
    </div>
    <!-- End of /.container -->
</section>
<!-- End of Section -->
