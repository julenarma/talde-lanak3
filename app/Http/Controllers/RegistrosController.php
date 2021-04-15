<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Registros;


class RegistrosController extends Controller
{

    public function index()
    {
        return Registros::all();
    }

    public function show(Registros $registro)
    {
        return $registro;
    }

    public function store(Request $request)
    {
        $registro = Registros::create($request->all());

        return response()->json($registro, 201);
    }

    public function update(Request $request, Registros $registro)
    {
        $registro->update($request->all());

        return response()->json($registro, 200);
    }

    public function delete(Registros $registro)
    {
        $registro->delete();

        return response()->json(null, 204);
    }
}