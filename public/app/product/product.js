var vue = new Vue({
	el:'#app_producto',
	created:function(){
          this.getProducts();
	},
	data:{
       products:[],
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

});