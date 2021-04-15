<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subproyectos extends Model
{
    protected $fillable = ['id', 'nombre_subproyecto', 'cod_interno', 'id_proyecto', 'desarrollador_principal'];

    
}
