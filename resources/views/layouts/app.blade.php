<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@yield('css')

@extends('_partial.css')





<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{route('createcfat.index')}}">
                        Inventory
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav avbar-left">
                        <li> <a  href="{{route('createcfat.create')}}">Create CFAT</a></li>
                        <li> <a  href="{{route('descriptions.index')}}">Descriptions</a></li>
                        &nbsp;<li> <a  href="{{route('brands.index')}}">Model</a></li>
                        <li> <a  href="{{route('techitems.index')}}">Tech Items</a></li>
                        <li> <a  href="{{route('manufactures.index')}}">Manufactures</a></li>
                        <li> <a  href="{{route('locations.index')}}">Locations</a></li>
{{--                        <li> <a  href="{{route('departments.index')}}">Departments</a></li>--}}
                        <li> <a  href="{{route('categories.index')}}">Categories</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    @extends('_partial.js')
    @yield('js')


</body>
</html>
