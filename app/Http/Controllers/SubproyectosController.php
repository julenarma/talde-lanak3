<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subproyectos;

class SubproyectosController extends Controller
{
    public function index()
    {
        return Subproyectos::all();
    }

    public function show(Subproyectos $subproyecto)
    {
        return $subproyecto;
    }

    public function store(Request $request)
    {
        $subproyecto = Subproyectos::create($request->all());

        return response()->json($subproyecto, 201);

    }

    public function update(Request $request, Subproyectos $subproyecto)
    {

        $subproyecto->update($request->all());
        return response()->json($subproyecto, 200);
    }

    public function delete(Subproyectos $subproyecto)
    {

        $subproyecto->delete();
        return response()->json(null, 204);
    }
}
