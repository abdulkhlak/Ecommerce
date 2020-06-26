@extends('backend.layouts.master')
@section('title')
    {{ __('User Register')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('User Register')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('User Register')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('users_update',$editUsers->id)}}" id="myForm" role="form">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" value="{{$editUsers->name}}" />
                                    <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" value="{{$editUsers->email}}"/>
                                    <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" id="mobile" value="{{$editUsers->mobile}}"/>
                                    <font style="color: red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                                          rows="2">{{$editUsers->address}}</textarea>
                                    <font style="color: red">{{($errors->has('Address'))?($errors->first('Address')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control select2" name="gender" id="gender" style="width: 100%;">
                                        <option selected="selected">select user gender</option>
                                        <option value="male {{($editUsers->gender =="male")?"selected":""}}">Male</option>
                                        <option value="female" {{($editUsers->gender =="female")?"selected":""}}>Female</option>
                                    </select>
                                    <font style="color: red">{{($errors->has('gender'))?($errors->first('gender')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control select2" name="userType" id="userType" style="width: 100%;">
                                        <option selected="selected">select user type</option>
                                        <option value="admin" {{($editUsers->userType =="admin")?"selected":""}}>Admin</option>
                                        <option value="user" {{($editUsers->userType =="user")?"selected":""}}>User</option>
                                    </select>
                                    <font style="color: red">{{($errors->has('userType'))?($errors->first('userType')):''}}</font>
                                </div>
                            </div>


                        </div>
                        <h4>{{ __('Account Management')}}</h4><br/>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password * " value=""/>
                                <font style="color: red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" name="confirm_password" id="mobile" placeholder="confirm password  * " value=""/>
                                <font style="color: red">{{($errors->has('confirm_password'))?($errors->first('confirm_password')):''}}</font>
                            </div>
                        </div>
                        <button type="submit" class="btnSubmit">Update Profile</button>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

