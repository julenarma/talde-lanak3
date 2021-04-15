<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    protected $fillable = ['id', 'fecha_alta', 'fecha_modif', 'usuario', 'usuario_modif', 'id_proyecto', 'id_subproyecto', 'cod_interno', 'mantis', 'tiempo', 'observaciones'];


    public function registros(){
        return $this->belongsTo(Proyectos::class, 'id');
    }

}
