@extends('layouts.app')
@section('title', 'Products')
@section('content')
    <div class="container">
        <table id="example" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="nosort">ID</th>
                <th>Serial</th>
                <th>Model</th>
                <th>Manufacture</th>
                <th>Category</th>
                <th>Description</th>
                <th>Quantity</th>
            </tr>
            </thead>
            <tbody>
            @if($brands)
                @foreach( $brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->serial}}</td>
                            <td>{{$brand->brand->name}}</td>
                            <td>{{$brand->manufacture->name}}</td>
                            <td>{{$brand->category->name}}</td>
                            <td>{{$brand->description->name}}</td>
                            <td>{{$brand->quantity}}</td>
                        </tr>

                @endforeach

            @endif
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
@endsection