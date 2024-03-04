<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductSale;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{
    public function index()
    {
        $productSales = ProductSale::all();
        return response()->json($productSales);
    }

    public function show($productId, $saleId)
    {
        $productSale = ProductSale::where('id_producto', $productId)
            ->where('id_venta', $saleId)
            ->first();

        if (!$productSale) {
            return response()->json(['error' => 'Relación Producto-Venta no encontrada'], 404);
        }

        return response()->json($productSale);
    }

    public function findByProductId($productId)
    {
        $productSales = ProductSale::where('id_producto', $productId)->get();

        if ($productSales->isEmpty()) {
            return response()->json(['error' => 'No se encontraron ventas para este producto'], 404);
        }

        return response()->json($productSales);
    }

    public function findBySaleId($saleId)
    {
        $productSales = ProductSale::where('id_venta', $saleId)->get();
        return response()->json($productSales);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_producto' => 'required|exists:producto,id',
            'id_venta' => 'required|exists:venta,id',
            'cantidad' => 'required',
            'total' => 'required',
            'saldoPagado' => 'required',
            'descuento' => 'required',
            'tipoDePago' => 'required',
            'ingreso' => 'required',
            'precio_unitario' => 'required',
        ]);

        $productSale = ProductSale::create($request->all());

        return response()->json($productSale, 201);
    }

    public function update(Request $request, $productId, $saleId)
    {
        $request->validate([
            'cantidad' => 'required',
            'total' => 'required',
            'saldoPagado' => 'required',
            'descuento' => 'required',
            'tipoDePago' => 'required',
            'ingreso' => 'required',
            'precio_unitario' => 'required',
        ]);

        $productSale = ProductSale::where('id_producto', $productId)
            ->where('id_venta', $saleId)
            ->first();

        if (!$productSale) {
            return response()->json(['error' => 'Relación Producto-Venta no encontrada'], 404);
        }

        $productSale->update($request->all());

        return response()->json($productSale);
    }

    public function destroy($productId, $saleId)
    {
        $productSale = ProductSale::where('id_producto', $productId)
            ->where('id_venta', $saleId)
            ->first();

        if (!$productSale) {
            return response()->json(['error' => 'Relación Producto-Venta no encontrada'], 404);
        }

        $productSale->delete();

        return response()->json(['message' => 'Relación Producto-Venta eliminada correctamente']);
    }

    
}

