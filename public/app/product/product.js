var vue = new Vue({
	el:'#app',
	created:function(){
          this.getProducts();
	},
	data:{
       list_product:[],
	},
	methods:{
		getProducts:function(){
           /*let urlApiProducts = datos_SERVER.url_server+'api/products?api_token='+datos_SERVER.token;
           axios.get(urlApiProducts).then(response => {
                this.list_product=response.data;
                for (var i = 0; i < this.users.length; i++) {
                    this.users[i]['busqueda']=this.users[i]['name']+' '
                                              +this.users[i]['last_name']+'|-|'
                                              +this.users[i]['email']+'|-|'
                                              +this.users[i]['user_name']+'|-|';
                    this.users[i]['busqueda']= this.users[i]['busqueda'].toLowerCase();
                }        
            });*/
		},	
	},

});