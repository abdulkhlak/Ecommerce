@extends('frontend.layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
        @include('frontend.include.sidebar')
        <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Top Brands</div>
                                    <div class="big-text fadeInDown-1"> New Collections</div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3"><a href="index6c11.html?page=single-product"
                                                                               class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                            Now</a></div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item" style="background-image: url(assets/images/sliders/02.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Spring 2016</div>
                                    <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span></div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"><span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3"><a href="index6c11.html?page=single-product"
                                                                               class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                            Now</a></div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->


            </div>
            <!-- /.homebanner-holder -->

            <!-- ============================================== CONTENT : END ============================================== -->
        </div>

        <!-- /.row -->

        <!-- Main content -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="head"><h2>Brands</h2></div>
                <hr>
                <div class="col-md-2">

                    <div class="product">
                        <div class="product-image">
                            <div class="image"><a href="detail.html"><img src="{{asset('frontend')}}/assets/images/products/k.png" alt=""></a></div>
                            <!-- /.image -->
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                </div>
                <div class="col-md-2">

                    <div class="product">
                        <div class="product-image">
                            <div class="image"><a href="detail.html"><img src="{{asset('frontend')}}/assets/images/products/k2.png" alt=""></a></div>
                            <!-- /.image -->
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                </div>
                <div class="col-md-2">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"><a href="detail.html"><img src="{{asset('frontend')}}/assets/images/products/k3.png" alt=""></a></div>
                            <!-- /.image -->
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>


                <!-- ============================================== end main content ============================================== -->
            </div>
        </div>

    </div>
    <!-- /.container -->
    @endsection