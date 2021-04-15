<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Festivos;

class FestivosController extends Controller
{
    public function index()
    {
        return Festivos::all();
    }

    public function show(Festivos $festivo)
    {
        return $festivo;
    }

    public function store(Request $request)
    {
        $festivo = Festivos::create($request->all());

        return response()->json($festivo, 201);
    }

    public function update(Request $request, Festivos $festivo)
    {
        $festivo->update($request->all());

        return response()->json($festivo, 200);
    }

    public function delete(Festivos $festivo)
    {
        $festivo->delete();

        return response()->json(null, 204);
    }
}
