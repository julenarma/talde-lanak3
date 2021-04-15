<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $fillable = ['id', 'nombre', 'cod_interno', 'desarrollador_principal'];


    
    public function subproyectos(){
        return $this->hasMany('App\Models\Subproyectos', 'id_proyecto', 'id');
    }
    public function registros(){
        return $this->hasMany('App\Models\Registros', 'id_proyecto', 'id');
    }
    public function usuarios(){
        return $this->hasMany('App\Models\Usuarios', 'id', 'desarrollador_principal');
    }
   

}
