@extends('admin.layouts.master')

@section('content')
 <div class="col-sm-12">
        <!-- Nestable card start -->
        <div class="card">
            <div class="card-header">
                <h5>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h5>
            </div>
            <div class="card-block">
<div class="row">
    <div class="col-md-12 col-sm-offset-2">

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => config('quickadmin.route').'.daftarmobil.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('no_kerangka', 'Nomor Kerangka*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('no_kerangka', old('no_kerangka'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('no_polisi', 'Nomor Polisi*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('no_polisi', old('no_polisi'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('merek', 'Merek*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('merek', old('merek'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tipe', 'Tipe*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('tipe', old('tipe'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tahun', 'Tahun*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('tahun', old('tahun'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-sm btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}
</div>
</div>
</div>
@endsection