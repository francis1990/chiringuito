@extends('adminlte::page')
@section('content')
    <div id="app">
       @yield('content-main')
    </div>
@stop
 
 @section('js')
    <script src="{{ asset('js/app.js') }}" defer></script> 
    @yield('js-main')
@stop