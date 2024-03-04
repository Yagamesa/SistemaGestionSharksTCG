<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return response()->json($sales);
    }

    public function show($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['error' => 'Venta no encontrada'], 404);
        }

        return response()->json($sale);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|exists:cliente,id',
            'id_usuario' => 'required|exists:users,id',
            'fecha_venta' => 'required|date',
            // Otros campos necesarios para la venta
        ]);

        $sale = Sale::create($request->all());

        // Puedes agregar aquí la lógica para ProductSale si es necesario

        return response()->json($sale, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_cliente' => 'required|exists:cliente,id',
            'id_usuario' => 'required|exists:users,id',
            'fecha_venta' => 'required|date',
            // Otros campos necesarios para la venta
        ]);

        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['error' => 'Venta no encontrada'], 404);
        }

        $sale->update($request->all());

        // Puedes agregar aquí la lógica para ProductSale si es necesario

        return response()->json($sale);
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['error' => 'Venta no encontrada'], 404);
        }

        // Puedes agregar aquí la lógica para eliminar ProductSale asociados

        $sale->delete();

        return response()->json(['message' => 'Venta eliminada correctamente']);
    }
    public function findByDate(Request $request)
{
    $request->validate([
        'date' => 'required|date',
    ]);

    $date = $request->input('date');

    $sales = Sale::whereDate('fecha_venta', $date)->get();

    return response()->json($sales);
}

}
