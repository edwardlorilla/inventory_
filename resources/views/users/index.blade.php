@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <div class="container">
        <users></users>
    </div>
@endsection

<div class="modal fade example-modal" id="deleteModal">
    <div class="modal modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Are you sure you want to delete this?</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::open(['id'=>'delete_form', 'method'=>'destroy']) !!}
                        <div class="col-sm-offset-2 col-sm-6">
                            <div class="form-group">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    {!! Form::submit('Delete User', ['class'=>'btn btn-outline pull-left']) !!}
                    {!! Form::close() !!}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->


td><input type="checkbox" id="checkbox" class="CheckBoxClassName" name="delete[]"
          value="{{$role->id}}" form="delete_form"></td>

<h2>Small Modal</h2>
<!-- Trigger the modal with a button -->


