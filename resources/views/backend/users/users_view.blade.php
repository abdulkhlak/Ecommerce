@extends('backend.layouts.master')
@section('title')
    {{ __('User List')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Users List')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('User List')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <section class="content-header">
                    <h1><a href="{{route('users_add')}}" class="btn btn-primary">{{ __('Add New')}}</a> </h1>

                </section>
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header">
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>{{ __('SL')}}</th>
                                    <th>{{ __('Role')}}</th>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Email')}}(s)</th>
                                    <th>{{ __('Phone Number')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allUserss as $key => $user)
                                <tr>

                                    <td>{{$key+1}}</td>
                                    <td>{{$user->userType}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td> <input class="btn btn-sm" type="checkbox"
                                                data-toggle="toggle" data-size="mini"
                                                data-on="active" data-offstyle="danger"
                                                id="userStatus" data-id="{{$user->id}}"
                                                data-off="inactive"{{$user->status ==1
                                                ?'checked':''}}></td>
                                    <td>
                                        <a href="{{route('users_edit',$user->id)}}" class="btn btn-sm btn-primary"><i class="fa
                                        fa-edit"></i></a>
                                        <a href="{{route('users_delete',$user->id)}}" id="delete" class="btn btn-sm btn-primary"><i
                                                    class="fa
                                        fa-trash"></i></a>
                                    </td>


                                </tr>
                                    @endforeach


                                </tbody>

                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

