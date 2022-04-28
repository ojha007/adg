@extends('backend.master')
@section('title')
    {{$event->title}}
@endsection
@section('breadcrumb')
    <h1>
        {{$event->title}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><a href="{{route('admin.events.index')}}">Event</a></li>
    </ol>
@endsection
@section('content')
    <div class="box box-default">
        <div class="box-header">
            <div class="box-tools pull-right">
                <a href="{{route('admin.events.edit',$event->slug)}}" class="btn btn-primary btn-flat">
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
