@extends('layouts.app')
@section('title', 'Brand')

@section('content')
    <div class="container">

    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Create Product</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {!! Form::open(['method'=>'POST', 'action'=>'ProductsController@store' ] ) !!}


    <div class="box-body">
        <div class="form-group">
            {!! Form::label('name', ucfirst('Item:')) !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('quantity', ucfirst('quantity:')) !!}
            {!! Form::text('quantity', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('serial', ucfirst('serial:')) !!}
            {!! Form::text('serial', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('brand_id', ucfirst('brand:')) !!}
            {!! Form::text('brand_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('manufacture_id', ucfirst('manufacture:')) !!}
            {!! Form::text('manufacture_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description_id', ucfirst('description:')) !!}
            {!! Form::text('description_id', null, ['class'=>'form-control']) !!}
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