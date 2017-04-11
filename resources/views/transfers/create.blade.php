@extends('layouts.app')
@section('title', 'Create CFAT')
@section('css')
    <script src="https://unpkg.com/vue@2.2.6"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/underscore.js') }}"></script>
    {{--<script src="https://unpkg.com/jquery"></script>--}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection
@section('content')
    <div id="el">
        <section class="panel">
            <div class="panel panel-footer">
                <header class="panel panel-default">
                    <h3>Create CFAT</h3>
                </header>
            </div>
            <div class="panel panel-footer">
                {!! Form::open(['method'=>'POST', 'action'=>'TransferController@store' ] ) !!}
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                            <th>Products</th>
                            <th>Departments</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th style="text-align: center;"><a v-on:click.prevent="addRow" class="addRow"><i
                                            class="glyphicon glyphicon-plus"></i></a></th>
                            </thead>
                            <tbody>
                            <tr v-for="(addTd, index) in addRows">

                                {{--<td>{!! Form::select('product_id', $products ,null, ['id' => 'product_id' , 'class'=>'form-control' , 'v-model'=>'addTd.product', 'name'=>'product[]' , "@change"=>"getQuantity(addTd.product, index)" ])!!}</td>--}}
                                <td>
                                    <select name="product[]" class="form-control" name="product_id" v-model='addTd.product'
                                            @change="getQuantity(addTd.product, index)">
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">
                                                {{ $product->serial ? $product->serial : $product->description->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>{!! Form::select('location_id', $locations ,null, ['class'=>'form-control' , 'v-model'=>'addTd.location', 'name'=>'location[]', 'v-bind:disabled'=>"addTd.product ? false : true"])!!}</td>
                                <td>{!! Form::select('status', [1 =>'TRANFER', 2 =>'DEPLOY', 3 => 'REPLACED'],null, ['class'=>'form-control', 'v-model'=>'addTd.status', 'name'=>'status[]', 'v-bind:disabled'=>"addTd.product ? false : true" ]) !!}</td>
                                <td>
                                    <input name="quantity[]" class="form-control" min='1'
                                           :disabled="addTd.product ? false : true"
                                           v-model.number="addTd.quantity" v-bind:max="tempValue" type="number"></td>
                                <td>
                                    <button @click.prevent="addRows.splice(index, 1)" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-remove"></i></button>
                            </tr>
                            </tbody>
                        </table>
                        {!! Form::submit('Create Product ',    ['class'=>'btn btn-info pull-right']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>
    <script>
        var vm = new Vue({
            data: {
                addRows: [],
                addTd: {product: {id: 0}},
                products: [],
                tempValue: 0,
                selected: 0
            },
            created: function () {
                this.fetchProducts();
            },
            methods: {
                updateSelected: function (newSelected) {
                    this.selected = newSelected
                },
                addTag: function (newTag) {
                    this.options.push(newTag);
                    this.selected.push(newTag);
                },
                addRow: function (event) {
                    this.addRows.push({
                        value: '',
                        quantity: 1,
                        product: null,
                        location: null,
                        status: null,
                        maxValue: null
                    });
                },
                fetchProducts: function () {
                    var isIE = /*@cc_on!@*/false || !!document.documentMode;
//                    console.log(browserName)
                    if (!isIE) {
                        const that = this;
                        axios.get('../api/products')
                            .then(function (response) {
                                that.products = response.data.products
                            })
//                        axios.get('../api/products').then(response => this.products = response.data.products)
                    } else {
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', '../api/products', false);
                        xhr.send();
                        if (xhr.status != 200) {
                            console.log(xhr.status + ': ' + xhr.statusText); // пример вывода: 404: Not Found
                        } else {
                            this.products = JSON.parse(xhr.responseText);
                        }
                    }
                },
                getQuantity: function (quantity, index) {
                    this.tempValue = 0;
                    this.addRows[index].product.quantity = 1;
                    var _quantity = parseInt(quantity);
                    var indexProduct = _.indexOf(_.pluck(this.products, 'id'), _quantity);
                    this.tempValue = this.products[indexProduct].quantity;
                }
            }
        }).$mount('#el');
    </script>



@endsection
@section('js')


@endsection
