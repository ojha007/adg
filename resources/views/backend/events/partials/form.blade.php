
<div class="col-md-6 form-group @error('title') has-error @enderror">
    {!! Form::label('Title') !!}
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'---ENTER EVENT TITLE----','required'=>'true']) !!}
</div>
<div class="clearfix"></div>
<div class="col-md-6 form-group @error('time') has-error @enderror">
    {!! Form::label('Event Date') !!}
    {!! Form::text('time',null,['class'=>'form-control','placeholder'=>'---ENTER EVENT DATE----','id'=>'datepicker']) !!}
</div>
<div class="col-md-6 form-group @error('location') has-error @enderror">
    {!! Form::label('location') !!}
    {!! Form::text('location',null,['class'=>'form-control','placeholder'=>'---ENTER EVENT LOCATION----']) !!}
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
            $('#datepicker').datepicker({
                autoclose: true,
                format: "yyyy-mm-dd",
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true,
                orientation: "bottom left"
            })
        })
    </script>
    <script src="{{asset('/backend/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/backend/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
@endpush
