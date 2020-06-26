@extends('backend.layouts.master')
@section('title')
    {{ __('Profile Edit')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Profile Edit')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Profile Edit')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('profile_update')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" value="{{$editProfile->name}}" />
                                    <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" value="{{$editProfile->email}}"/>
                                    <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" id="mobile" value="{{$editProfile->mobile}}"/>
                                    <font style="color: red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                                          rows="2">{{$editProfile->address}}</textarea>
                                    <font style="color: red">{{($errors->has('Address'))?($errors->first('Address')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control select2" name="gender" id="gender" style="width: 100%;">
                                        <option selected="selected" disabled>select user gender</option>
                                        <option value="male {{($editProfile->gender =="male")?"selected":""}}">Male</option>
                                        <option value="female" {{($editProfile->gender =="female")?"selected":""}}>Female</option>
                                    </select>
                                    <font style="color: red">{{($errors->has('gender'))?($errors->first('gender')):''}}</font>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="left">
                            <img id="img-uploaded" src="{{(!empty($editProfile->avatar))?url
                        ('upload/user_images/'.$editProfile->avatar):url('upload/no_image.png')}}" alt="your image" />
                        </div>
                        <div class="right">

                            <input type="text" class="img-path input" placeholder="Image Path">
                            <span class="file-wrapper">
                              <input type="file" name="avatar" id="imgInp" class="uploader input" />
                              <span class="btn btn-large btn-alpha upload">Upload Profile</span>
                            </span>
                        </div>

                        <hr>
                        <hr>
                        <hr>
                        <button type="submit" class="btnSubmit">Update Profile</button>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

