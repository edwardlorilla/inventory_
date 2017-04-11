@extends('layouts.app')
@section('title', 'Create Tech Items')
@section('css')
    <script src="https://unpkg.com/vue@2.2.6"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/underscore.js') }}"></script>
@endsection
@section('content')

    <div id="container">
        <section class="panel">
            <div class="panel panel-footer">
                <header class="panel panel-default">
                    <h3>Create Tech Item</h3>
                </header>
            </div>
            <div class="panel panel-footer">
                {!! Form::open(['method'=>'POST', 'action'=>'ProductsController@store' ] ) !!}
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                            <th>Serial</th>
                            <th>Quantity</th>
                            <th>Model</th>
                            <th>Categories</th>
                            <th>Description</th>
                            <th>Manufacture</th>
                            <th>Location</th>
                            <th style="text-align: center;"><a v-on:click="addRow" class="addRow"><i
                                            class="glyphicon glyphicon-plus"></i></a></th>
                            </thead>
                            <tbody>
                            <tr v-for="(addTd, index) in addRows">
                                <td>{!! Form::text('serial', null, ['class'=>'form-control' , 'v-model' => "addTd.serial", "@keydown.enter.prevent" => "addRow" , 'name' => 'serial[]']) !!}</td>
                                <td>{!! Form::number('quantity', null, ['class'=>'form-control', 'v-model.number' => "addTd.serial ? 1 : addTd.quantity", 'name' => 'quantity[]', ':disabled' => 'addTd.serial ? true : false' ]) !!}</td>
                                <td>{!! Form::select('brand_id', [0 => 'Select Model'] +$brands ,null, ['class'=>'form-control', 'v-model' => "addTd.model" , 'name' => 'model[]'])!!}</td>
                                <td>{!! Form::select('category_id', [0 => 'Select Category'] + $categories ,null, ['class'=>'form-control', 'v-model' => "addTd.category", 'name' => 'category[]'])!!}</td>
                                <td>{!! Form::select('description_id',[0 => 'Select Description'] + $descriptions ,null, ['class'=>'form-control', 'v-model' => "addTd.description", 'name' => 'description[]'])!!}</td>
                                <td>{!! Form::select('manufacture_id',[0 => 'Select Manufacture'] + $manufactures ,null, ['class'=>'form-control', 'v-model' => "addTd.manufacture" , 'name' => 'manufacture[]'])!!}</td>
                                <td>{!! Form::select('location_id', [0 => 'Select Location'] + $locations ,null, ['class'=>'form-control', 'v-model' => "addTd.location", 'name' => 'location[]'])!!}</td>
                                <td>
                                    <button @click.prevent="addRows.splice(index, 1)" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-remove"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        {!! Form::submit('Create Tech Items ',    ['class'=>'btn btn-info pull-right']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>

@endsection
@section('js')
    <script>
        new Vue({
            el: '#container',
            data: {
                addRows: [],
                addTd: {}
            },
            computed: {},
            methods: {
                submitAdd: function () {

                },
                addRow: function (event) {
                    this.addRows.push({
                        value: '',
                        serial: '',
                        quantity: 1,
                        model: 0,
                        category: 0,
                        description: 0,
                        manufacture: 0,
                        location: 0
                    });
                }
            }
        })
    </script>
@endsection
