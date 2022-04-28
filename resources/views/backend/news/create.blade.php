@extends('backend.master')
@section('title')
    Add News
@endsection
@section('breadcrumb')
    <h1>
        Create News
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection
@section('content')
    <div class="box box-default">
        <div class="box-header">
            <h3 class="box-title">
                Add News
            </h3>
        </div>
        {!! Form::open(['route'=>'admin.news.store','file'=>'true']) !!}
        <div class="box-body">
            @include('backend.news.partials.form')
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
