@extends('frontend.layouts.master')
@section('content')

    <div class="container">


        <!-- Main content -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
          @if($products->isEmpty())

                   <h2 class="text-center text-danger">product not found</h2>
              @else
                    @foreach($products as $product)

                        <div class="col-md-2 grid grid-cols-3 gap-3 lg:grid-cols-5 md:grid-cols-3">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"><a href="{{route('product',$product->slug)}}"><img
                                                    src="{{asset('upload/products/'.$product->image)}}" alt=""></a></div>
                                    <!-- /.image -->
                                </div>
                                <!-- /.product-image -->
                                @php($price =false)
                                @if($product->special_start <= date('Y-m-d')&& $product->special_end >= date('Y-m-d'))
                                    @php($price =true)
                                @endif
                                <div class="product-info text-left">
                                    <h3 class="name"><a href="{{route('product',$product->slug)}}">{{$product->product_name}}</a></h3>
                                    <div class="rating rateit-small">

                                    </div>
                                    <div class="product-price"><span class="price">৳{{$price ?
                                $product->special_price:$product->selling_price}}</span>
                                        @if($price)

                                            <span style="color: red">{{sprintf('%.2f',(($product->selling_price-$product->special_price)
                                    /$product->selling_price)*100)}}%off</span>

                                            <span class="price-before-discount">৳{{$product->selling_price}}
                                    </span>
                                        @endif
                                    </div>
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
                @endforeach
              @endif




            <!-- ============================================== end main content ============================================== -->
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection