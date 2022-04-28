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
            <div class="box-tools pull-right">
                <a href="{{route('admin.news.create')}}" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i>
                    Add News
                </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @forelse($allNews as $key=>$news)
                    <tr>
                        <td>{{$key +1}}</td>
                        <td>{{$news->title}}</td>
                        <td></td>
                        <td>
                            <a href="{{route('admin.news.show',$news->slug)}}"
                               class="btn btn-default  btn-sm btn-flat">
                                <i class="fa fa-eye "></i></a>

                            <a href="{{route('admin.news.edit',$news->slug)}}"
                               class="btn btn-primary btn-sm btn-flat">
                                <i class="fa fa-edit "></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.news.destroy', $news->id], 'style'=>'display:inline', 'onsubmit' => "return confirm('Are you sure you want to delete?')"]) !!}
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
                        <td>NO RECORD FOUND . <a href="{{route('admin.news.create')}}">CLICK HERE TO ADD NEWS</a></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="box-footer"></div>
    </div>
@endsection
