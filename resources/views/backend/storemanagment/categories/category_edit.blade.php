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
                <form method="post" action="{{route('categories_update',$categories->id)}}" id="categoryForm"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="category_name" id="category_name"
                                           value="{{$categories->category_name}}"/>
                                    <font style="color: red">{{($errors->has('category_name'))?($errors->first('category_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="category_slug" id="category_slug"
                                           placeholder=" Category Slug" value="{{$categories->category_slug}}"/>
                                    <font style="color: red">{{($errors->has('category_slug'))?($errors->first('category_slug')):''}}</font>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <hr>

                                <div class="form-group">
                                    <div class="left">
                                        <img id="img-uploaded" src="{{(!empty($categories->category_logo))?url
                        ('upload/store_managment/brands_logo/'.$categories->category_logo):url('upload/no_image.png')}}" alt="category
                        logo" />
                                    </div>
                                    <div class="right">

                                        <input type="text" class="img-path input" placeholder="Image Path">
                                        <span class="file-wrapper">
                              <input type="file" name="brand_logo" id="imgInp" class="uploader input" />
                              <span class="btn btn-large btn-alpha upload">update category logo</span>
                            </span>
                                    </div>
                                    <font style="color: red">{{($errors->has('category_logo'))?($errors->first('category_logo')):''}}</font>
                                </div>
                            </div>


                        </div>
                        <hr>
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

