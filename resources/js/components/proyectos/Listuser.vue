@extends('layouts.app')

<template>
              

 
  <main>



    
    <div class="container mt-5">
      <span>{{lunes}}  {{viernes}}</span>
      <div class="col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
          
            
              <table  id="proyectos" class="table table-striped" style="width:100%">
               
                <thead>
                                

                  <tr id="tabla"> 
                  
                  <th>Kodea</th>
                    <th>Proiektua</th>
                    <th>Subproiektua</th>
                    <th>Data</th>
                     <th>Erabiltzailea</th>
                     
                  </tr> 
                </thead>

                <tbody v-if="proyectos.length > 0">
                  <tr v-for="(proyecto, key) in proyectos" :key="key">
                          <td>   {{ proyecto.id }}</td>
                      <td>   {{ proyecto.nombre }}</td>
                      <td  v-for="(subproyecto,key) in proyecto.subproyectos" :key="key">   {{ subproyecto.nombre_subproyecto }}</td>
                      <td v-for="(registro,key) in proyecto.registros" :key="key">  {{ registro.fecha_alta }}</td>
                       <td v-for="(usuario,key) in proyecto.usuarios" :key="key">  {{ usuario.username }}</td>
              
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
var monday = now.clone().weekday(1);
var friday = now.clone().weekday(5);


import moment from 'moment';
import datatable from 'datatables.net-bs4';


export default {
  name: "ProyectsListUser",
  

   
  data() {
    
    return {
      lunes: monday,
      viernes:friday,
      proyectos: [],
    
  
       
    };
  },
  mounted() {
  
    this.getProyecto();
  },
  methods: {
 

    moment: function () {
      return moment();
    },
    tabla(){
      this.$nextTick(()=>{
      $("#proyectos").DataTable({
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
      
      }}

</script>


<style scoped>
.table-responsive{

overflow-x:hidden;

}
table{
    text-align: center;
}

</style>
