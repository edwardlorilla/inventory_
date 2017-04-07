@extends('layouts.app')
@section('title', 'Brand')

@section('content')
    <div class="container">

    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Create User</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {!! Form::open(['method'=>'POST', 'action'=>'BrandControllers@store' ] ) !!}


    <div class="box-body">
        <div class="form-group">
            {!! Form::label('name', ucfirst('name:')) !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

    </div><!-- /.box-body -->
    @include('_partial.error')
    <div class="box-footer">
        <div class="box-footer">
            {!! Form::submit('Create Manufacture ',    ['class'=>'btn btn-info pull-right']) !!}
        </div><!-- /.box-footer -->

    </div>
    {!! Form::close() !!}
</div><!-- /.box -->
</div><!-- /.box -->
@endsection