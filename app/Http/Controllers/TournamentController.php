<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        return response()->json($tournaments);
    }

    public function show($id)
    {
        $tournament = Tournament::find($id);

        if (!$tournament) {
            return response()->json(['error' => 'Torneo no encontrado'], 404);
        }

        return response()->json($tournament);
    }

    public function findByDate(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date'
        ]);

        $fecha = $request->input('fecha');

        $tournaments = Tournament::whereDate('fecha', $fecha)->get();

        return response()->json($tournaments);
    }

    public function findByName(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $nombre = $request->input('nombre');

        $tournaments = Tournament::where('nombre', 'like', '%' . $nombre . '%')->get();

        return response()->json($tournaments);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha' => 'required|date',
            // Otras validaciones según tus necesidades
        ]);

        $tournament = Tournament::create($request->all());

        return response()->json($tournament, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha' => 'required|date',
            // Otras validaciones según tus necesidades
        ]);

        $tournament = Tournament::find($id);

        if (!$tournament) {
            return response()->json(['error' => 'Torneo no encontrado'], 404);
        }

        $tournament->update($request->all());

        return response()->json($tournament);
    }

    public function destroy($id)
    {
        $tournament = Tournament::find($id);

        if (!$tournament) {
            return response()->json(['error' => 'Torneo no encontrado'], 404);
        }

        $tournament->delete();

        return response()->json(['message' => 'Torneo eliminado correctamente']);
    }
}
