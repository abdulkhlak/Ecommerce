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
                <form method="post" action="{{route('users_store')}}" id="myForm" role="form">
                    @csrf
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="User Full Name *"
                                       value="" />
                                <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="jhon@jhon.com *" value=""/>
                                <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="+880178963571 " value=""/>
                                <font style="color: red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                                          rows="2"placeholder="Address"></textarea>
                                <font style="color: red">{{($errors->has('Address'))?($errors->first('Address')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control select2" name="gender" id="gender" style="width: 100%;">
                                    <option selected="selected" disabled>select user gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <font style="color: red">{{($errors->has('gender'))?($errors->first('gender')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control select2" name="userType" id="userType" style="width: 100%;">
                                    <option selected="selected" disabled>select user type</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                <font style="color: red">{{($errors->has('userType'))?($errors->first('userType')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password * " value=""/>
                                <font style="color: red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm password  * " value=""/>
                                <font style="color: red">{{($errors->has('confirm_password'))?($errors->first('confirm_password')):''}}</font>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btnSubmit">Create User</button>
                </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->


@endsection

