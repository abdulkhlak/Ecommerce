@extends('backend.layouts.master')
@section('title')
    {{ __('Categories List')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Categories List')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Categories List')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <section class="content-header">
                    <h1><a href="{{route('categories_add')}}" class="btn btn-primary">{{ __('Add New')}}</a></h1>

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
                                    <th>{{ __('Category Name')}}</th>
                                    <th>{{ __('Category Slug')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorires as $key => $cat)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$cat->category_name}}</td>
                                        <td>{{$cat->category_slug}}</td>
                                        <td><input class="btn btn-sm" type="checkbox"
                                                   data-toggle="toggle" data-size="mini"
                                                   data-on="active" data-offstyle="danger"
                                                   id="categoryStatus" data-id="{{$cat->id}}"
                                                   data-off="inactive"{{$cat->status ==1
                                                ?'checked':''}}></td>
                                        <td>
                                            <a href="{{route('categories_edit', base64_encode($cat->id))}}"
                                               class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('categories_delete', base64_encode
                                     ($cat->id))}}" id="delete" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a></td>

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

