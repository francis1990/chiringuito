Vue.component('tabla-products',{
  template: `
          <table id="products" class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th > Name</th>
                                <th >Details</th>
                                <th >Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in products">
                                <td>{{ item.name }}</td>
                                <td>{{ item.details }}</td>
                                <td>
                                    <a href="#" class=""></a><i class="fa fa-eye"></i> &nbsp;
                                    <a href="#" class=""></a><i class="fa fa-pencil text-green"></i> &nbsp;
                                    <a href="#" class=""></a><i class="fa fa-trash text-red"></i> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
     `,
     created:function(){
          this.getProducts();
     },
     data:function(){
      return {
        products:[],
      }
     },
     methods:{
        getProducts:function(){
           let urlApiProducts = datos_SERVER.url_server+'api/products';
           axios.get(urlApiProducts).then(response => {
                this.products=response.data;
                /*for (var i = 0; i < this.users.length; i++) {
                    this.users[i]['busqueda']=this.users[i]['name']+' '
                                              +this.users[i]['last_name']+'|-|'
                                              +this.users[i]['email']+'|-|'
                                              +this.users[i]['user_name']+'|-|';
                    this.users[i]['busqueda']= this.users[i]['busqueda'].toLowerCase();
                }  */      
            });
           
       },  
   },
})

var vue = new Vue({
  el:'#app_producto',
});









