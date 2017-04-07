@extends('layouts.app')
@section('title', 'Products')
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
                <th>Serial</th>
                <th>Department</th>
            </tr>
            </thead>
            <tbody>
            @if($brands)
                @foreach( $brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->product->serial}}</td>
                            <td>{{$brand->department->name}}</td>
                        </tr>

                @endforeach

            @endif
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
@endsection