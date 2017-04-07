@extends('layouts.app')
@section('title', 'Locations')
@section('content')
    <div class="container">
        <div class="btn-group" style="margin-bottom: 20px;">
            <a href="{{route('brands.create')}}" class="btn btn-primary btn-flat"><span
                        class="glyphicon glyphicon-plus"></span> Create</a>
        </div>
        <table id="example" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="nosort">ID</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @if($brands)
                @foreach( $brands as $brand)
                    @if($brand->status == 0 )
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                        </tr>
                    @endif

                @endforeach

            @endif
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
@endsection