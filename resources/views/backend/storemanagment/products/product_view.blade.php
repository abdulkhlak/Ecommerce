@extends('backend.layouts.master')
@section('title')
    {{ __('Product List')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Product List')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Product List')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <section class="content-header">
                    <h1><a href="{{route('product_add')}}" class="btn btn-primary">{{ __('Add New')}}</a></h1>

                </section>
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header">
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>{{ __('SL')}}</th>
                                    <th>{{ __('Product Name')}}</th>
                                    <th>{{ __('buying')}}</th>
                                    <th>{{ __('selling')}}</th>
                                    <th>{{ __('special')}}</th>
                                    <th>{{ __('Offer Date')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key => $product)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td><input type="text"  data-id =" {{$product->id}}" class="form-control buying_price"
                                                   value="{{$product->buying_price}}"></td>
                                        <td>{{$product->selling_price}}</td>
                                        <td>{{$product->special_price}}</td>

                                        <td>{{$product->special_start.'-'.$product->special_end}}</td>
                                        <td><input class="btn btn-sm" type="checkbox"
                                                   data-toggle="toggle" data-size="mini"
                                                   data-on="active" data-offstyle="danger"
                                                   id="productStatus" data-id="{{$product->id}}"
                                                   data-off="inactive"{{$product->status ==1
                                                ?'checked':''}}></td>
                                        <td>
                                            <a href="{{route('slider_edit', base64_encode($product->id))}}"
                                               class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('slider_delete', base64_encode
                                     ($product->id))}}" id="delete" class="btn btn-xs btn-primary"><i class="fa fa-trash"></i></a></td>

                                    </tr>
                                @endforeach



                                </tbody>

                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

