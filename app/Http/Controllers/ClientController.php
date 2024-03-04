<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    public function show($id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json(['error' => 'Cliente no encontrado'], 404);
        }

        return response()->json($client);
    }

    public function findByNombre(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $nombre = $request->input('nombre');

        $clients = Client::where('nombre', 'like', '%' . $nombre . '%')->get();

        return response()->json($clients);
    }

    public function findByCodigo(Request $request)
    {
        $request->validate([
            'codigo' => 'required'
        ]);

        $codigo = $request->input('codigo');

        $clients = Client::where('codigo_yugioh', $codigo)
            ->orWhere('codigo_digimon', $codigo)
            ->orWhere('codigo_onepiece', $codigo)
            ->get();

        return response()->json($clients);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'celular' => 'required',
            'codigo_yugioh' => 'required',
            'codigo_digimon' => 'required',
            'codigo_onepiece' => 'required',
            'sharkCoins' => 'required',
            'deuda' => 'required',
        ]);

        $client = Client::create($request->all());

        return response()->json($client, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'celular' => 'required',
            'codigo_yugioh' => 'required',
            'codigo_digimon' => 'required',
            'codigo_onepiece' => 'required',
            'sharkCoins' => 'required',
            'deuda' => 'required',
        ]);

        $client = Client::find($id);

        if (!$client) {
            return response()->json(['error' => 'Cliente no encontrado'], 404);
        }

        $client->update($request->all());

        return response()->json($client);
    }

    public function destroy($id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json(['error' => 'Cliente no encontrado'], 404);
        }

        $client->delete();

        return response()->json(['message' => 'Cliente eliminado correctamente']);
    }
}
