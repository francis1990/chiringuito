@extends('layouts.main')

@section('title', 'Product list')

@section('content_header')
    <h1>Product list</h1>
@stop

@section('content-main')
   <product_crud_component></product_crud_component>
@endsection