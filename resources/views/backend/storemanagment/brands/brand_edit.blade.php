@extends('backend.layouts.master')
@section('title')
    {{ __('Brand Edit')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Brand Edit')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Brand Edit')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('brands_update',$brands->id)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="brand_name" id="brand_name"
                                           value="{{$brands->brand_name}}" />
                                    <font style="color: red">{{($errors->has('brand_name'))?($errors->first('brand_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="brand_slug" id="brand_slug"
                                           value="{{$brands->brand_slug}}"/>
                                    <font style="color: red">{{($errors->has('brand_slug'))?($errors->first('brand_slug')):''}}</font>
                                </div>
                            </div>


                        </div>
                        <br>
                        <div class="left">
                            <img id="img-uploaded" src="{{(!empty($brands->brand_logo))?url
                        ('upload/store_managment/brands_logo/'.$brands->brand_logo):url('upload/no_image.png')}}" alt="brand logo" />
                        </div>
                        <div class="right">

                            <input type="text" class="img-path input" placeholder="Image Path">
                            <span class="file-wrapper">
                              <input type="file" name="brand_logo" id="imgInp" class="uploader input" />
                              <span class="btn btn-large btn-alpha upload">update brand logo</span>
                            </span>
                        </div>

                        <hr>
                        <hr>
                        <hr>
                        <button type="submit" class="btnSubmit">Update Brand</button>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

