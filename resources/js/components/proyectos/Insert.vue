<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Erregistroa gehitu</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="create">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Proiektua</label>
                                    <input type="text" class="form-control" v-model="proyecto.nombre">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Subproiektua</label>
                                   <input type="text" class="form-control" v-model="proyecto.nombre_subproyecto">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Alta-data</label>
                               <input type="date" class="form-control" v-model="proyecto.fecha_alta">
                                </div>
                            </div>
                               <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Erabiltzailea</label>
                               <input type="text" class="form-control" v-model="proyecto.username">
                                </div>
                            </div>
                            

                            <div class="col-12">
                            
                                <button type="submit" class="btn btn-primary">Erregistroa gehitu</button>
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
    name:"proyectoAdd",
    data(){
        return {
             proyecto:{
          
                nombre:"",
                nombre_subproyecto:"",
                fecha_alta:"",
                username:"",
                
              
            }
        }
    },
    methods:{

      async create(){
        
          this.axios.post('http://talde-lanak.garapenaeus/api/proyectos/',this.proyecto).then(response=>{
                    this.$router.push({name:"ProyectsList"})
            

          Toast.fire({
         icon: 'success',
         title: 'Erregistroa ondo sortu da'
          })
                }).catch(error=>{
                    console.log(error)
                })
        

        }
    }
}
</script>