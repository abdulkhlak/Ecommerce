@extends('backend.layouts.master')
@section('title')
    {{ __('Sliders List')}}
@endsection
@section('main-content')
    <section class="content-header">
        <h1>{{ __('Sliders List')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ __('Home')
            }}</a></li>
            <li class="active">{{ __('Sliders List')}}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <section class="content-header">
                    <h1><a href="{{route('slider_add')}}" class="btn btn-primary">{{ __('Add New')}}</a></h1>

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
                                    <th>{{ __('Title')}}</th>
                                    <th>{{ __('Sub Title')}}</th>
                                    <th>{{ __('Image')}}</th>
                                    <th>{{ __('URL')}}</th>
                                    <th>{{ __('Date')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $key => $slider)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->sub_title}}</td>
                                        <td><img  src="{{asset('upload/sliders/'.$slider->image)
                                        }}"></td>
                                        <td><a class="btn btn-primary btn-xs" target="_blank" href="{{$slider->url}}">click here</a> </td>
                                        <td>{{$slider->start_date.'-'.$slider->end_date}}</td>
                                        <td><input class="btn btn-sm" type="checkbox"
                                                   data-toggle="toggle" data-size="mini"
                                                   data-on="active" data-offstyle="danger"
                                                   id="sliderStatus" data-id="{{$slider->id}}"
                                                   data-off="inactive"{{$slider->status ==1
                                                ?'checked':''}}></td>
                                        <td>
                                            <a href="{{route('slider_edit', base64_encode($slider->id))}}"
                                               class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('slider_delete', base64_encode
                                     ($slider->id))}}" id="delete" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a></td>

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

