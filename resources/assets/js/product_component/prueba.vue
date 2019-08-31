<template>
	 <div class="box">
            <div class="box-body">
                <p>Mi id: {{ articulo.id }}</p>
                <p>Mi Descripcion: {{ articulo.descripcion }}</p>
                <p>Mi Mi fecha: {{ articulo.fecha }}</p>
            </div>
      </div>
</template>


<script>
	export default{
		props:['articulo'],
		/*data(){
			return{
				articulo:{id:"",'descripcion':"",'facha':""}
			}
		}*/

	}
</script>