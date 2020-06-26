@extends('backend.layouts.master')
@section('title')
    {{ __('Password Change')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Password Change')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Password Change')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('password_update')}}" id="passwordForm">
                    @csrf
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="current_password" id="current_password"
                                           placeholder="please  enter old password" value=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="new_password" id="new_password"
                                           placeholder="new password" value=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                                           placeholder="confirm new password" value=""/>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btnSubmit">Password change</button>
                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

