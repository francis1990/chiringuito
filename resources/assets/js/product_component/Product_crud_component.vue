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

       <prueba v-for="articulo in arr" 
            :key="articulo.id"
            :articulo="articulo">
       </prueba>
       <!-- <prueba></prueba> -->


    </div>
    <product_form></product_form>

</div>
</template>

<script type="text/javascript">
    export default{
        data(){
            return {
                arr:[
                {id:1,'descripcion':'abc','facha':'17/05/2019'},
                {id:2,'descripcion':'Soy el segundo','facha':'2210/2018'},
                {id:3,'descripcion':'Esto es Cuba','facha':'31/12/2002'},
                ]
            }
        },
    }

</script>