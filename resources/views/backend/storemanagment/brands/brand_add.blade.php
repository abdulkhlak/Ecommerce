@extends('backend.layouts.master')
@section('title')
    {{ __('Create New Brand')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Create New Brand')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Create New Brand')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('brands_store')}}" id="brandform" enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Add Title *"
                                           value=""/>
                                    <font style="color: red">{{($errors->has('brand_name'))?($errors->first('brand_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="brand_slug" id="brand_slug"
                                           placeholder=" Brand Slug" value=""/>
                                    <font style="color: red">{{($errors->has('brand_slug'))?($errors->first('brand_slug')):''}}</font>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <hr>

                                <div class="form-group">
                                    <div class="left">
                                        <img id="img-uploaded" src="{{asset('upload/no_image.png')}}" alt="your image"/>
                                    </div>
                                    <div class="right">

                                        <input type="text" class="img-path input" placeholder="logo Path">
                                        <span class="file-wrapper">
                              <input type="file" name="brand_logo" id="brand_logo" class="uploader input"/>
                              <span class="btn btn-large btn-alpha upload">upload brand logo</span>
                            </span>
                                    </div>
                                    <font style="color: red">{{($errors->has('brand_logo'))?($errors->first('brand_logo')):''}}</font>
                                </div>
                            </div>


                        </div>
                        <hr>
                        <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option selected disabled> Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                        </div>
                        <hr>

                        <hr>

                        <hr>

                        <button type="submit" class="btnSubmit">Create Brand</button>
                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->


@endsection

