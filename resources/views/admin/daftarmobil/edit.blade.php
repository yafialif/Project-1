@extends('admin.layouts.master')

@section('content')
<div class="col-sm-12">
        <!-- Nestable card start -->
        <div class="card">
            <div class="card-header">
                <h5>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h5>
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

{!! Form::model($daftarmobil, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.daftarmobil.update', $daftarmobil->id))) !!}

<div class="form-group">
    {!! Form::label('no_kerangka', 'Nomor Kerangka*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('no_kerangka', old('no_kerangka',$daftarmobil->no_kerangka), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('no_polisi', 'Nomor Polisi*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('no_polisi', old('no_polisi',$daftarmobil->no_polisi), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('merek', 'Merek*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('merek', old('merek',$daftarmobil->merek), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tipe', 'Tipe*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('tipe', old('tipe',$daftarmobil->tipe), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tahun', 'Tahun*', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('tahun', old('tahun',$daftarmobil->tahun), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.daftarmobil.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-sm btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}
</div>
</div>
</div>
@endsection