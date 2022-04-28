<div class="col-md-6 form-group @error('title') has-error @enderror">
    {!! Form::label('Title') !!}
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'---ENTER NEWS TITLE----','required'=>'true']) !!}
</div>
<div class="clearfix"></div>
<div class="col-md-6 form-group @error('time') has-error @enderror">
    {!! Form::label('EXTERNAL LINK (YOUTUBE)') !!}
    {!! Form::text('external_link',null,['class'=>'form-control','placeholder'=>'---ENTER EXTERNAL LINK----']) !!}
</div>

<div class="col-md-12 form-group @error('description') has-error @enderror">
    {!! Form::label('description') !!}
    {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'---ENTER EVENT DESCRIPTION----','id'=>'description']) !!}
</div>
<div class="col-md-12 form-group @error('image') has-error @enderror">
    {!! Form::label('image') !!}
    {!! Form::file('image') !!}
</div>

@push('scripts')
    <script>
        $(function () {
            CKEDITOR.replace('description');
        })
    </script>
    <script src="{{asset('/backend/plugins/ckeditor/ckeditor.js')}}"></script>
@endpush
