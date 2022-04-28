@extends('backend.master')
@section('subTitle')
    {{$event->title}}
@endsection
@section('title')
    Edit Event
@endsection
@section('breadcrumb')
    <h1>
        Edit Event
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><a href="{{route('admin.events.index')}}">Event</a></li>
    </ol>
@endsection
@section('content')
    <div class="box box-default">
        <div class="box-header">
            <h3 class="box-title">
                Edit Event
            </h3>
        </div>
        {!! Form::model($event,['route'=>['admin.events.update',$event->slug],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
        <div class="box-body">
            @include('backend.events.partials.form')
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-flat btn-danger pull-left">
                <i class="fa fa-close"></i>
                RESET
            </button>
            <button class="btn btn-flat btn-success pull-right" type="submit">
                <i class="fa fa-save"></i>
                UPDATE
            </button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
