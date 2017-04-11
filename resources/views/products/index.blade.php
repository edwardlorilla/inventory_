@extends('layouts.app')
@section('title', 'Products')
@section('content')

    <div class="container">

        <div class="btn-group" style="margin-bottom: 20px;">
            <button href="{{route('techitems.index')}}" class="btn btn-primary btn-flat"><span
                        class="glyphicon glyphicon-plus"></span> Create
            </button>
        </div>
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
                <th>Location</th>
            </tr>
            </thead>
            <tbody>
            @if($brands)
                @foreach( $brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>{{$brand->serial ? $brand->serial : '' }} </td>
                        <td>{{$brand->brand  ? $brand->brand->name : '' }}</td>
                        <td>{{$brand->manufacture ? $brand->manufacture->name : '' }}</td>
                        <td>{{$brand->category ? $brand->category->name : '' }}</td>
                        <td>{{$brand->description ? $brand->description->name : '' }}</td>
                        <td>{{$brand->quantity  ? $brand->quantity : '' }}</td>
                        <td>{{$brand->location  ? $brand->location->name : '' }}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>


@endsection