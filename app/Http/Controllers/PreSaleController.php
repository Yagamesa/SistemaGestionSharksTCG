<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PreSale;
use Illuminate\Http\Request;

class PreSaleController extends Controller
{
    public function index()
    {
        $preSales = PreSale::all();
        return response()->json($preSales);
    }

    public function show($id)
    {
        $preSale = PreSale::find($id);

        if (!$preSale) {
            return response()->json(['error' => 'PreVenta no encontrada'], 404);
        }

        return response()->json($preSale);
    }

    public function findByClientId($clientId)
    {
        $preSales = PreSale::where('id_cliente', $clientId)->get();

        if ($preSales->isEmpty()) {
            return response()->json(['error' => 'No se encontraron PreVentas para este cliente'], 404);
        }

        return response()->json($preSales);
    }

    public function findByProductName(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required'
        ]);

        $productName = $request->input('nombre_producto');

        $preSales = PreSale::where('nombre_producto', 'like', '%' . $productName . '%')->get();

        return response()->json($preSales);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'cantidad' => 'required',
            'precio_unitario' => 'required',
            'total' => 'required',
            'saldo' => 'required',
            'fecha_pago' => 'required',
            'tipoDePago' => 'required',
            'ingreso' => 'required',
            'id_usuario' => 'required|exists:users,id',
            'id_cliente' => 'required|exists:cliente,id',
        ]);

        $preSale = PreSale::create($request->all());

        return response()->json($preSale, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'cantidad' => 'required',
            'precio_unitario' => 'required',
            'total' => 'required',
            'saldo' => 'required',
            'fecha_pago' => 'required',
            'tipoDePago' => 'required',
            'ingreso' => 'required',
            'id_usuario' => 'required|exists:users,id',
            'id_cliente' => 'required|exists:cliente,id',
        ]);

        $preSale = PreSale::find($id);

        if (!$preSale) {
            return response()->json(['error' => 'PreVenta no encontrada'], 404);
        }

        $preSale->update($request->all());

        return response()->json($preSale);
    }

    public function destroy($id)
    {
        $preSale = PreSale::find($id);

        if (!$preSale) {
            return response()->json(['error' => 'PreVenta no encontrada'], 404);
        }

        $preSale->delete();

        return response()->json(['message' => 'PreVenta eliminada correctamente']);
    }
}
