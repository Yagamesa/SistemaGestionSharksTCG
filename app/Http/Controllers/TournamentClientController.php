<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TournamentClient;
use Illuminate\Http\Request;

class TournamentClientController extends Controller
{
    public function index()
    {
        $tournamentClients = TournamentClient::all();
        return response()->json($tournamentClients);
    }

    public function show($tournamentId, $clientId)
    {
        $tournamentClient = TournamentClient::where('id_torneo', $tournamentId)
            ->where('id_cliente', $clientId)
            ->first();

        if (!$tournamentClient) {
            return response()->json(['error' => 'Relación Torneo-Cliente no encontrada'], 404);
        }

        return response()->json($tournamentClient);
    }

    public function findByTournamentId($tournamentId)
    {
        $tournamentClients = TournamentClient::where('id_torneo', $tournamentId)->get();

        if ($tournamentClients->isEmpty()) {
            return response()->json(['error' => 'No se encontraron relaciones para este torneo'], 404);
        }

        return response()->json($tournamentClients);
    }

    public function findByClientId($clientId)
    {
        $tournamentClients = TournamentClient::where('id_cliente', $clientId)->get();

        if ($tournamentClients->isEmpty()) {
            return response()->json(['error' => 'No se encontraron relaciones para este cliente'], 404);
        }

        return response()->json($tournamentClients);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_torneo' => 'required|exists:torneo,id',
            'id_cliente' => 'required|exists:cliente,id',
            'pago_torneo' => 'required',
            'tipoDePago' => 'required',
            'fecha_pago' => 'required|date',
            'ingreso' => 'required',
            // Otros campos necesarios
        ]);

        $tournamentClient = TournamentClient::create($request->all());

        return response()->json($tournamentClient, 201);
    }

    public function update(Request $request, $tournamentId, $clientId)
    {
        $request->validate([
            // Validaciones para campos a actualizar
        ]);

        $tournamentClient = TournamentClient::where('id_torneo', $tournamentId)
            ->where('id_cliente', $clientId)
            ->first();

        if (!$tournamentClient) {
            return response()->json(['error' => 'Relación Torneo-Cliente no encontrada'], 404);
        }

        $tournamentClient->update($request->all());

        return response()->json($tournamentClient);
    }

    public function destroy($tournamentId, $clientId)
    {
        $tournamentClient = TournamentClient::where('id_torneo', $tournamentId)
            ->where('id_cliente', $clientId)
            ->first();

        if (!$tournamentClient) {
            return response()->json(['error' => 'Relación Torneo-Cliente no encontrada'], 404);
        }

        $tournamentClient->delete();

        return response()->json(['message' => 'Relación Torneo-Cliente eliminada correctamente']);
    }
}
