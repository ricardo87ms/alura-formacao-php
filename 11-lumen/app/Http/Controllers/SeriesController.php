<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        return Serie::all();
    }

    public function store(Request $request)
    {
        return response()->json(Serie::create(['nome' => $request->nome]), 201);
    }

    public function show(int $id)
    {
        $serie = Serie::find($id);

        if (is_null($serie)) {
            return response()->json('', 204);
        }
        return response()->json($serie, 200);
    }

    public function update(Request $request, int $id)
    {
        $serie = Serie::find($id);

        if (is_null($serie)) {
            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }

        $serie->fill($request->all());
        $serie->save();

        return response()->json($serie, 200);
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos = Serie::destroy($id);
        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }

        return response()->json('', 204);
    }
}