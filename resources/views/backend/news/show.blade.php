@extends('backend.master')
@section('title')
    {{$news->title}}
@endsection
@section('breadcrumb')
    <h1>
        {{$news->title}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><a href="{{route('admin.news.index')}}">News</a></li>
    </ol>
@endsection
@section('content')
    <div class="box box-default">
        <div class="box-header">
            <div class="box-tools pull-right">
                <a href="{{route('admin.news.edit',$news->slug)}}" class="btn btn-primary btn-flat">
                    <i class="fa fa-edit"></i>
                    Edit Event
                </a>
            </div>
        </div>
        <div class="box-body">
        </div>
        <div class="box-footer">
        </div>
    </div>
@endsection
