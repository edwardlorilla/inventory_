@extends('layouts.app')
@section('title', 'Brand')

@section('content')
    <div class="container">

    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Create Transfer</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {!! Form::open(['method'=>'POST', 'action'=>'TransferController@store' ] ) !!}


    <div class="box-body">
        <div class="form-group">
            {!! Form::label('product_id', ucfirst('product:')) !!}
            {!! Form::select('product_id', $products ,null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('department_id', ucfirst('department:')) !!}
            {!! Form::select('department_id', $departments ,null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('status', ucfirst('status:')) !!}
            {!! Form::select('status', [1 =>'TRANFER', 2 =>'DEPLOY', 3 => ''],null, ['class'=>'form-control']) !!}
        </div>

    </div><!-- /.box-body -->
    @include('_partial.error')
    <div class="box-footer">
        <div class="box-footer">
            {!! Form::submit('Create Product ',    ['class'=>'btn btn-info pull-right']) !!}
        </div><!-- /.box-footer -->

    </div>
    {!! Form::close() !!}
</div><!-- /.box -->
</div><!-- /.box -->
@endsection