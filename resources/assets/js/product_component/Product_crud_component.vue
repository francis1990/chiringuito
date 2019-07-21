<template>
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
                <product_table_list></product_table_list>
            </div>
        </div>
    </div>
    <!-- <product_form></product_form> -->
</div>

</template>