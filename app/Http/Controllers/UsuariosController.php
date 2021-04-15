<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function index()
    {

        
        return Usuarios::all();
    }

    public function show(Usuarios $usuario)
    {
        return $usuario;
    }

    public function store(Request $request)
    {
        $usuario = Usuarios::create($request->all());

        return response()->json($usuario, 201);
    }

    public function update(Request $request, Usuarios $usuario)
    {
        $usuario->update($request->all());

        return response()->json($usuario, 200);
    }

    public function delete(Usuarios $usuario)
    {
        $usuario->delete();

        return response()->json(null, 204);
    }
}
