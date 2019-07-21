<template>
    <table id="products" class="table table-bordered table-striped datatable" >
        <thead>
            <tr>
                <th > Name</th>
                <th >Details</th>
                <th >Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in products">
                <td>{{ item.name }} </td>
                <td>{{ item.details }}</td>
                <td>
                    <a href="#" class=""></a><i class="fa fa-eye"></i> &nbsp;
                    <a href="#" class=""></a><i class="fa fa-pencil text-green"></i> &nbsp;
                    <a href="#" class=""></a><i class="fa fa-trash text-red"></i> 
                </td>
            </tr>
        </tbody>
    </table>
</template>

  <script >
  
  import datatables from 'datatables'
  	export default {
        mounted() {
            this.getProducts()
        },
        data:function(){
            return {
                 products:[],
            }
        },
        methods:{
           mytable(){
               $(function(){
                   $('#products').DataTable();
               })
           },
          getProducts:function(){
           let urlApiProducts = datos_SERVER.url_server+'api/products';
           axios.get(urlApiProducts).then(response => {
                this.products=response.data;
                this.mytable();    
            });
           
          },  
       },
    }
  </script>                  
