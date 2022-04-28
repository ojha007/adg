@extends('backend.master')
@section('title')
    Add Events
@endsection
@section('breadcrumb')
    <h1>
        Create Events
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
                Add Events
            </h3>
            <div class="box-tools pull-right">
                <a href="{{route('admin.events.create')}}" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i>
                    Add Event
                </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @forelse($events as $event)
                    <tr>
                        <td>{{$event->time}}</td>
                        <td>{{$event->location}}</td>
                        <td>{{$event->title}}</td>
                        <td><img class="img img-responsive"
                                 style="height: 100px;width: 100px"
                                 src="{{$event->image}}" alt="{{$event->slug}}">
                        </td>
                        <td>

                            <a href="{{route('admin.events.show',$event->slug)}}"
                               class="btn btn-default  btn-sm btn-flat">
                                <i class="fa fa-eye "></i></a>

                            <a href="{{route('admin.events.edit',$event->slug)}}"
                               class="btn btn-primary btn-sm btn-flat">
                                <i class="fa fa-edit "></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.events.destroy', $event->id], 'style'=>'display:inline', 'onsubmit' => "return confirm('Are you sure you want to delete?')"]) !!}
                            {{ Form::button('<i class="fa fa-times"></i>',
                                ['class' => 'btn btn-danger btn-sm btn-flat',
                                'role' => 'button', 'type' => 'submit',"data-container"=>"body",
                                 "data-tooltip"=>"tooltip",
                                 "title"=>"Delete", "data-placement"=>"bottom"]) }}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">NO RECORDS FOUND!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="box-footer"></div>
    </div>
@endsection
