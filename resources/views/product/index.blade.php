@extends('adminlte::page')

@section('title', 'Product list')

@section('content_header')
    <h1>Product list</h1>
@stop

@section('content')
<div class="container" id="app">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Product list</div>
                <div class="card-body">
                    <table> 
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script> console.log('Hi!'); </script>
@stop