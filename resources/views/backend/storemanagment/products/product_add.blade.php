@extends('backend.layouts.master')
@section('title')
    {{ __('Create New Product')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Create New Product')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Create New Product')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('product_store')}}" id="productForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>select parent category</label>
                                    <select name="cat_id" id="cat_id" class="form-control">
                                        <option selected disabled> select parent category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"> {{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <font style="color: red">{{($errors->has('category'))?($errors->first('category')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>select sub category</label>
                                    <select name="sub_cat_id" id="sub_cat_id" class="form-control">
                                        <option selected disabled> select sub category</option>

                                    </select>
                                    <font style="color: red">{{($errors->has('category'))?($errors->first('category')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>select brand</label>
                                    <select name="brand_id" class="form-control">
                                        <option selected disabled> select brand</option>
                                        <option value="0"> No brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}"> {{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                    <font style="color: red">{{($errors->has('category'))?($errors->first('category')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>product name</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name"
                                           placeholder=" Product Name" value=""/>
                                    <font style="color: red">{{($errors->has('product_name'))?($errors->first('product_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug"
                                           placeholder=" slug " value=""/>
                                    <font style="color: red">{{($errors->has('slug'))?($errors->first('slug')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>model</label>
                                    <input type="text" class="form-control" name="model" id="model"
                                           placeholder=" model " value=""/>
                                    <font style="color: red">{{($errors->has('model'))?($errors->first('model')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>color</label>
                                    <input type="text" class="form-control" name="color" id="color"
                                           placeholder=" color " value=""/>
                                    <font style="color: red">{{($errors->has('color'))?($errors->first('color')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>size</label>
                                    <input type="text" class="form-control" name="size" id="size"
                                           placeholder=" size " value=""/>
                                    <font style="color: red">{{($errors->has('size'))?($errors->first('size')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>buying price</label>
                                    <input type="text" class="form-control" name="buying_price" id="buying_price"
                                           placeholder=" 0.00 " value=""/>
                                    <font style="color: red">{{($errors->has('buying_price'))?($errors->first('buying_price')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>selling price</label>
                                    <input type="text" class="form-control" name="selling_price" id="selling_price"
                                           placeholder=" 0.00 " value=""/>
                                    <font style="color: red">{{($errors->has('selling_price'))?($errors->first('selling_price')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>special price</label>
                                    <input type="text" class="form-control" name="special_price" id="special_price"
                                           placeholder=" 0.00 " value=""/>
                                    <font style="color: red">{{($errors->has('special_price'))?($errors->first('special_price')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>special start</label>
                                    <input type="date" class="form-control" name="special_start" id="special_start"
                                           placeholder=" YYYY-MM-DD " value=""/>
                                    <font style="color: red">{{($errors->has('special_start'))?($errors->first('special_start')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>special end</label>
                                    <input type="date" class="form-control" name="special_end" id="special_end"
                                           placeholder="YYYY-MM-DD " value=""/>
                                    <font style="color: red">{{($errors->has('special_end'))?($errors->first('special_end')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>quantity</label>
                                    <input type="text" class="form-control" name="quantity" id="quantity"
                                           placeholder="quantity " value=""/>
                                    <font style="color: red">{{($errors->has('quantity'))?($errors->first('quantity')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>video url</label>
                                    <input type="url" class="form-control" name="video_url" id="video_url"
                                           placeholder="video url" value=""/>
                                    <font style="color: red">{{($errors->has('video_url'))?($errors->first('video_url')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="warranty" class="control-label">Warranty</label><br>
                                    <div class="radio radio-custom radio-inline radio-primary">
                                        <input type="radio" id="warranty_yes" name="warranty" value="1">
                                        <label for="warranty_yes">yes</label>
                                    </div><br>
                                    <div class="radio radio-inline radio-danger">
                                        <input type="radio" id="warranty_no" name="warranty" value="0">
                                        <label for="warranty_no">No</label>

                                    </div>
                                    </div>

                            </div>
                            <div class="warranty-box" style="display: none">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>warranty duration</label>
                                    <input type="text" class="form-control" name="warranty_duration" id="warranty_duration"
                                           placeholder="warranty duration" value=""/>
                                    <font style="color: red">{{($errors->has('warranty_duration'))?($errors->first('warranty_duration')):''}}</font>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>warranty condition</label>
                                    <textarea placeholder="warranty condition"  rows="5" cols="80" name="warranty_condition"
                                              id="warranty_condition"
                                              class="form-control"></textarea>
                                    <font style="color: red">{{($errors->has('warranty_condition'))?($errors->first('warranty_condition')):''}}</font>
                                </div>
                            </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>description</label>
                                    <textarea placeholder="description"  rows="5" cols="80" name="description" id="description"
                                              class="form-control"></textarea>
                                    <font style="color: red">{{($errors->has('description'))?($errors->first('description')):''}}</font>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Long description</label>
                                    <textarea placeholder="description"  rows="10" cols="80" name="long_description"
                                              id="long_description"
                                              class="form-control"></textarea>
                                    <font style="color: red">{{($errors->has('long_description'))?($errors->first('long_description')):''}}</font>
                                </div>
                            </div>



                            <div class="col-md-6">

                                <hr>

                                <div class="form-group">
                                    <div class="left">
                                        <img id="img-uploaded" src="{{asset('upload/no_image.png')}}" alt="your image"/>
                                    </div>
                                    <div class="right">

                                        <input type="text" class="img-path input" placeholder="image">
                                        <span class="file-wrapper">
                              <input type="file" name="image" id="image" class="uploader input"/>
                              <span class="btn btn-large btn-alpha upload">cover image</span>
                            </span>
                                    </div>
                                    <font style="color: red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                </div>
                            </div>


                            <div class="col-md-6">

                                <hr>

                                <div class="form-group">
                                    <div class="right">
                                            <span class="btn btn-success fileinput-button">
                                         <span>Select product galleary</span>
                                            <input type="file" name="files[]" id="files" multiple
                                                   accept="image/jpeg, image/png, image/gif,"><br/>
                                        </span>
                                            <output id="Filelist"></output>
                                        </div>
                                    </div>
                                    <font style="color: red">{{($errors->has('galleary'))?($errors->first('galleary')):''}}</font>
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

                        <button type="submit" class="btnSubmit">Create Product</button>
                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->


@endsection

