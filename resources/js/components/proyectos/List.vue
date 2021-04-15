<template>
  <main>
    <div class="container mt-5">
        <span>{{aste1}}  {{aste2}}</span>
                   <div class="col-12 mb-2 add"> 
                    <router-link :to='{name:"proyectoAdd"}' class="btn btn-primary">Gehitu</router-link>
                                
                                           
                    </div> 

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="tabla_principal" class="table table-striped" style="width:100%">
                <thead>
                  <tr id="tabla">
                <th>Kodea</th>
                    <th>Proiektua</th>
                    <th>Subproiektua</th>
                    <th>Data</th>
                     <th>Erabiltzailea</th>
                        <th>Ekintzak</th>
                 
                  </tr>
                </thead>

                <tbody v-if="proyectos.length > 0">
                  
                    
                  <tr v-for="(proyecto,key) in proyectos" :key="key">
               
              

                    <td>   {{ proyecto.id }}</td>
                      <td>   {{ proyecto.nombre }}</td>
                      <td  v-for="(subproyecto,key) in proyecto.subproyectos" :key="'A'+ key">   {{ subproyecto.nombre_subproyecto }}</td>
                      <td v-for="(registro,key) in proyecto.registros" :key="'B'+ key">  {{ registro.fecha_alta }}</td>
                       <td v-for="(usuario,key) in proyecto.usuarios" :key="'C'+ key">  {{ usuario.username }}</td>
                 
                   
                   <td>   <router-link :to='{name:"proyectoEdit",params:{id:proyecto.id}}' class="btn btn-success"><i class="far fa-edit"></i></router-link> 
                                                
                           <button type="button" @click="deleteProyecto(proyecto.id)" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                   </td> 
                                    
                  </tr>
                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>
 
<script>

var now = moment(); 
var eu = moment().locale('eu');
var monday = now.clone().weekday(1);
var friday = now.clone().weekday(5);

var astelehena= moment.localeData().monday
var ostirala= moment.localeData().friday



import moment from 'moment';
import datatable from 'datatables.net-bs4';

export default {

    name:"ProyectsList",
    data(){
        return {
            aste1: astelehena,
            aste2:ostirala,
            proyectos:[],
         
        }
    },
    mounted(){
        this.getProyecto()
    },  

    methods:{
       
    tabla(){
      this.$nextTick(()=>{
      $("#tabla_principal").DataTable({
                  "language": {
                            "lengthMenu": "Sarrerak erakutsi _MENU_ ",
                            "zeroRecords": "Hutsik",
                            "info": "Orrialdea _PAGE_ / _PAGES_",
                            "infoEmpty": "Ez dago erregistrorik",
                            "infoFiltered": "(guztira _MAX_ erregistro)",
                            "search" : "Aurkitu: ",
                            "paginate" : {
                              "next" : "Hurrengoa",
                              "previous": "Aurrekoa"
                            }
                        },
  
      })
 

      });
    },
    getProyecto(){
      
      axios.get('http://talde-lanak.garapenaeus/api/proyectos').then(res=>{

        
        this.proyectos=res.data;
         
      
        this.tabla();

     }
       
      )},
      deleteProyecto(id){
            if(confirm("Proiektua ezabatu nahi duzu?")){
                this.axios.delete(`http://talde-lanak.garapenaeus/api/proyectos/${id}`).then(response=>{
                  
                    this.getProyecto()
             
                }).catch(error=>{
                    console.log(error)
                })
            }
        },
      moment: function () {
      return moment();
    }

  },

  }
     
</script>


<style scoped>

.add{

 display: flex;
justify-content: flex-end;
}

table{
    text-align: center;

}

.table-responsive{

overflow-x:hidden;

}
</style>
