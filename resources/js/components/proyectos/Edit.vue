<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Erregistroa editatu </h4>
                    
                </div>
                <div class="card-body">
                    <form @submit.prevent="update" v-for="(proyecto, key) in proyectos" :key="key">

                        <div class="row" >
                            <div class="col-12 mb-2" >
                                <div class="form-group">
                                    <label>Kodea </label>
                                    <input type="text" class="form-control" v-model="proyecto.id" disabled>
                                 
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Proiektua</label>
                                    <input type="text" class="form-control" v-model="proyecto.nombre">
                                </div>
                            </div>
                            <div class="col-12 mb-2" v-for="(proyecto,key) in proyecto.subproyectos" :key="'A'+ key">
                                <div class="form-group">
                                    <label>Subproiektua</label>
                                    <input type="text" class="form-control" v-model="proyecto.nombre_subproyecto">
                                </div>
                            </div> 
                            <div class="col-12 mb-2" v-for="(proyecto,key) in proyecto.registros" :key="'B'+ key">
                                <div class="form-group">
                                    <label>Alta-data</label>
                                    <input type="text" class="form-control" v-model="proyecto.fecha_alta">
                                </div>
                            </div>
                              <div class="col-12 mb-2" v-for="(proyecto,key) in proyecto.usuarios" :key="'C'+ key">
                                <div class="form-group">
                                    <label>Erabiltzailea</label>
                                    <input type="text" class="form-control" v-model="proyecto.username">
                                </div>
                            </div>
                            
                            <div class="col">
                                       <button type="submit" class="btn btn-danger">Atzera</button>
                                    <button type="submit" class="btn btn-success">Erregistroa baieztatu</button>
                         
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"proyectoEdit",
    data(){
        return {
     
        proyectos :[],
      


      proyecto:{

        id:"",
        nombre:"",
        nombre_subproyecto:"",
        fecha_alta:"",
        username:"",

      }
        }
    },
    mounted(){
        this.showProyecto()
    
    },
    methods:{
       
         async showProyecto(){
            await this.axios.get(`http://talde-lanak.garapenaeus/api/proyectos/${this.$route.params.id}`).then(response=>{
          
    
            this.proyectos=response.data;

               const { id, nombre, nombre_subproyecto, fecha_alta, username } = response.data
                
                this.proyecto.id = id
                this.proyecto.nombre = nombre
                this.proyecto.nombre_subproyecto = nombre_subproyecto
                this.proyecto.fecha_alta = fecha_alta
                this.proyecto.username = username


            console.log(id)
            }).catch(error=>{
                console.log(error)
    
            })
        }, 
        async update(){
            
            await this.axios.put(`http://talde-lanak.garapenaeus/api/proyectos/${this.$route.params.id}`,this.proyectos).then(response=>{
                this.$router.push({name:"ProyectsList"})
                 
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>
