@extends('backend.layouts.master')
@section('title')
    {{ __('Create New Category')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Create New Category')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Create New Category')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('categories_store')}}" id="categoryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="category_id" class="form-control">
                                        <option selected disabled> select parent category</option>
                                        @foreach($category as $cat)
                                        <option value="{{$cat->id}}"> {{$cat->subcat_name}}</option>
                                            @endforeach
                                    </select>
                                    <font style="color: red">{{($errors->has('category_id'))?($errors->first('category_id')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subcat_name" id="subcat_name"
                                           placeholder=" add title" value=""/>
                                    <font style="color: red">{{($errors->has('subcat_name'))?($errors->first('subcat_name')):''}}</font>
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
                              <input type="file" name="subcat_logo" id="subcat_logo" class="uploader input"/>
                              <span class="btn btn-large btn-alpha upload">upload brand logo</span>
                            </span>
                                    </div>
                                    <font style="color: red">{{($errors->has('subcat_logo'))?($errors->first('subcat_logo')):''}}</font>
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

