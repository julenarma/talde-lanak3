<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\Proyectos;
use App\Models\Subproyectos;
Use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{

    public function index()
    {
        $proyecto = Proyectos::with('usuarios','registros', 'subproyectos')->get();
      
        return $proyecto;

    
    }

    public function show(Proyectos $proyecto)
    {
    
        $proyecto = Proyectos::with('usuarios','registros', 'subproyectos')->where('proyectos.id', $proyecto->id)->get();
        return $proyecto;
    }

    public function store(Request $request)
    {
        $proyecto = Proyectos::create($request->all());
        return response()->json($proyecto, 201);

    }

    public function update( Proyectos $proyecto, Request $request)
  {
    $proyecto = Proyectos::with('usuarios','registros', 'subproyectos');
  
    $proyecto = DB::table('proyectos')
    ->select('proyectos.*', 'subproyectos.*')
    ->join('subproyectos', 'subproyectos.id_proyecto', '=', 'proyectos.id')
    ->get();
    
    $proyecto->update($request->all());
    return response()->json($proyecto, 200);
    
    }


    public function delete(Proyectos $proyecto)
    {
        $proyecto->delete();
        return response()->json(null, 204);
    }

}
