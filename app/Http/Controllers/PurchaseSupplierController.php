<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PurchaseSupplier;
use Illuminate\Http\Request;

class PurchaseSupplierController extends Controller
{
    public function index()
    {
        $purchaseSuppliers = PurchaseSupplier::all();
        return response()->json($purchaseSuppliers);
    }

    public function show($purchaseId, $supplierId)
    {
        $purchaseSupplier = PurchaseSupplier::where('id_compra', $purchaseId)
            ->where('id_proveedor', $supplierId)
            ->first();

        if (!$purchaseSupplier) {
            return response()->json(['error' => 'Relación Purchase-Supplier no encontrada'], 404);
        }

        return response()->json($purchaseSupplier);
    }

    public function findByPurchaseId($purchaseId)
    {
        $purchaseSuppliers = PurchaseSupplier::where('id_purchase', $purchaseId)->get();

        if ($purchaseSuppliers->isEmpty()) {
            return response()->json(['error' => 'No se encontraron relaciones para esta compra'], 404);
        }

        return response()->json($purchaseSuppliers);
    }

    public function findBySupplierId($supplierId)
    {
        $purchaseSuppliers = PurchaseSupplier::where('id_supplier', $supplierId)->get();

        if ($purchaseSuppliers->isEmpty()) {
            return response()->json(['error' => 'No se encontraron relaciones para este proveedor'], 404);
        }

        return response()->json($purchaseSuppliers);
    }

    public function findByDate(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $date = $request->input('date');

        $purchaseSuppliers = PurchaseSupplier::whereDate('created_at', $date)->get();

        if ($purchaseSuppliers->isEmpty()) {
            return response()->json(['error' => 'No se encontraron relaciones para esta fecha'], 404);
        }

        return response()->json($purchaseSuppliers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_purchase' => 'required|exists:purchase,id',
            'id_supplier' => 'required|exists:supplier,id',
            // Otros campos necesarios
        ]);

        $purchaseSupplier = PurchaseSupplier::create($request->all());

        return response()->json($purchaseSupplier, 201);
    }

    public function update(Request $request, $purchaseId, $supplierId)
    {
        $request->validate([
            // Validaciones para campos a actualizar
        ]);

        $purchaseSupplier = PurchaseSupplier::where('id_purchase', $purchaseId)
            ->where('id_supplier', $supplierId)
            ->first();

        if (!$purchaseSupplier) {
            return response()->json(['error' => 'Relación Purchase-Supplier no encontrada'], 404);
        }

        $purchaseSupplier->update($request->all());

        return response()->json($purchaseSupplier);
    }

    public function destroy($purchaseId, $supplierId)
    {
        $purchaseSupplier = PurchaseSupplier::where('id_purchase', $purchaseId)
            ->where('id_supplier', $supplierId)
            ->first();

        if (!$purchaseSupplier) {
            return response()->json(['error' => 'Relación Purchase-Supplier no encontrada'], 404);
        }

        $purchaseSupplier->delete();

        return response()->json(['message' => 'Relación Purchase-Supplier eliminada correctamente']);
    }
}
