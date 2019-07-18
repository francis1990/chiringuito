@extends('adminlte::page')

@section('title', 'Product list')

@section('content_header')
    <h1>Product list</h1>
@stop

@section('content')

    <div class="row" id="app">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Product list</h3>
                    <div class="pull-right">
                    <button type="button" class="btn btn-block btn-primary btn-sm">
                        <i class="fa fa-file ">
                        </i> New</button>
                    </div>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                  
        
                    <table id="products" class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th > Name</th>
                                <th >Details</th>
                                <th >Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">Dignissimos dolores corporis aut ipsa quia odio explicabo nisi.</td>
                                <td>Aut aut cum inventore doloremque ut qui aut qui. </td>
                                <td>
                                    <a href="#" class=""></a><i class="fa fa-eye"></i> &nbsp;
                                    <a href="#" class=""></a><i class="fa fa-pencil text-green"></i> &nbsp;
                                    <a href="#" class=""></a><i class="fa fa-trash text-red"></i> 
                                </td>
                            </tr>
                            <tr>
                                <td class="">Mollitia iure eaque debitis.</td>
                                <td>Quas vero ea quam eius magni voluptas consequatur.</td>
                                <td>
                                    <a href="#" class=""></a><i class="fa fa-eye"></i> &nbsp;
                                    <a href="#" class=""></a><i class="fa fa-pencil text-green"></i> &nbsp;
                                    <a href="#" class="text-red"></a><i class="fa fa-trash text-red"></i> 
                                </td>
                            </tr>
                            <tr>
                                <td class="">Dicta recusandae et cumque ipsam qui quam qui.</td>
                                <td>Rerum et qui quia sit quasi. Necessitatibus officiis aut odio voluptatem.</td>
                                <td>
                                    <a href="#" class=""></a><i class="fa fa-eye"></i> &nbsp;
                                    <a href="#" class="\"></a><i class="fa fa-pencil text-green"></i> &nbsp;
                                    <a href="#" class="text-red"></a><i class="fa fa-trash text-red"></i> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script> console.log('Hi!'); </script>
@stop