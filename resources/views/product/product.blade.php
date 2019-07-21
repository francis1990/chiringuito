@extends('layouts.main')

@section('title', 'Product list')

@section('content_header')
    <h1>Product list</h1>
@stop

@section('content-main')
<div id='app_producto'>
    <div  class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Product list</h3>
                    <div class="pull-right">
                    <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-primary btn-sm">
                        <i class="fa fa-file ">
                        </i> New</button>
                    </div>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                    
                    
                    <tabla-products></tabla-products>
                    
                </div>
            </div>
        </div>
            <!-- /.box-body -->
    </div>


          <!-- /.box -->


<div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">New Product</h4>
              </div>
              <div class="modal-body">
              <form role="form">
             
                <div class="form-group">
                  <label for="name">Email address</label>
                  <input class="form-control" id="name" placeholder="Enter name" type="text">
                </div>
                <div class="form-group">
                  <label for="details">Details</label>
                  <textarea class="form-control" rows="3" placeholder="Enter details" id="details"></textarea>
                </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
 </div>       
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js-main')
    <script src="{{asset('app/product/product.js')}}"></script>
@stop