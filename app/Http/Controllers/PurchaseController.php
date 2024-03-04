<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return response()->json($purchases);
    }

    public function show($id)
    {
        $purchase = Purchase::find($id);

        if (!$purchase) {
            return response()->json(['error' => 'Compra no encontrada'], 404);
        }

        return response()->json($purchase);
    }

    public function findByDate(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
        ]);

        $date = $request->input('fecha');

        $purchases = Purchase::whereDate('fecha_compra', $date)->get();

        return response()->json($purchases);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:users,id',
            'fecha_compra' => 'required|date',
        ]);

        $purchase = Purchase::create($request->all());

        return response()->json($purchase, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_usuario' => 'required|exists:users,id',
            'fecha_compra' => 'required|date',
        ]);

        $purchase = Purchase::find($id);

        if (!$purchase) {
            return response()->json(['error' => 'Compra no encontrada'], 404);
        }

        $purchase->update($request->all());

        return response()->json($purchase);
    }

    public function destroy($id)
    {
        $purchase = Purchase::find($id);

        if (!$purchase) {
            return response()->json(['error' => 'Compra no encontrada'], 404);
        }

        $purchase->delete();

        return response()->json(['message' => 'Compra eliminada correctamente']);
    }

    
}
