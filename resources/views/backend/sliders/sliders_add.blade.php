@extends('backend.layouts.master')
@section('title')
    {{ __('Create New Slider')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Create New Slider')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Create New Slider')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('slider_store')}}" id="categoryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Add Title *"
                                           value=""/>
                                    <font style="color: red">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sub_title" id="sub_title"
                                           placeholder=" sub title" value=""/>
                                    <font style="color: red">{{($errors->has('sub_title'))?($errors->first('sub_title')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="url" class="form-control" name="url" id="url"
                                           placeholder=" url" value=""/>
                                    <font style="color: red">{{($errors->has('url'))?($errors->first('url')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>start date</label>
                                    <input type="date" class="form-control" name="start_date" id="start_date"
                                           placeholder=" start date" value=""/>
                                    <font style="color: red">{{($errors->has('start_date'))?($errors->first('start_date')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>end date</label>
                                    <input type="date" class="form-control" name="end_date" id="end_date"
                                           placeholder=" end date" value=""/>
                                    <font style="color: red">{{($errors->has('end_date'))?($errors->first('end_date')):''}}</font>
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
                              <input type="file" name="image" id="image" class="uploader input"/>
                              <span class="btn btn-large btn-alpha upload">upload image</span>
                            </span>
                                    </div>
                                    <font style="color: red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
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

                        <button type="submit" class="btnSubmit">Create Category</button>
                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->


@endsection

