@extends('backend.layouts.master')
@section('title')
    {{ __('User List')}}
@endsection
@section('main-content')

    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{(!empty($user->avatar))?url
                        ('upload/user_images/'.$user->avatar):url('upload/no_image.png')}}"
                             alt="User profile
                        picture">
                        <h3 class="profile-username text-center">{{$user->name}}</h3>
                        <p class="text-muted text-center">{{$user->email}}</p>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">

                    <div class="box-body">

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> {{ __('Location')}}</strong>
                        <p class="text-muted">{{$user->address}}</p>
                        <strong><i class="fa fa-mobile" aria-hidden="true"></i> {{ __('Mobile')}}</strong>
                        <p class="text-muted">{{$user->mobile}}</p>
                        <strong><i class="fa fa-user" aria-hidden="true"></i> {{ __('Gender')}}</strong>
                        <p class="text-muted">{{$user->gender}}</p>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="{{route('profile_edit')}}"><h5>Edit Profile</h5></a></li>
                        <li><a href="{{route('profile_password')}}"><h5>Settings</h5></a></li>
                    </ul>

                </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

