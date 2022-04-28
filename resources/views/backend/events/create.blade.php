@extends('backend.master')
@section('title')
    Create New Event
@endsection
@section('breadcrumb')
    <h1>
        Create New Event
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><a href="{{route('admin.events.index')}}">Event</a></li>
    </ol>
@endsection
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">
                Add News
            </h3>
        </div>
        {!! Form::open(['route'=>'admin.events.store','enctype'=>'multipart/form-data']) !!}
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
                SUBMIT
            </button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

