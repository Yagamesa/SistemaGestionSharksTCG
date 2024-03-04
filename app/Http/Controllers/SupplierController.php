<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return response()->json($suppliers);
    }

    public function show($id)
    {
        $supplier = Supplier::find($id);

        if (!$supplier) {
            return response()->json(['error' => 'Proveedor no encontrado'], 404);
        }

        return response()->json($supplier);
    }

    public function searchByName(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $name = $request->input('name');

        $suppliers = Supplier::where('nombre', 'like', '%' . $name . '%')->get();

        return response()->json($suppliers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'contacto_correo' => 'required|email',
        ]);

        $supplier = Supplier::create($request->all());

        return response()->json($supplier, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'contacto_correo' => 'required|email',
        ]);

        $supplier = Supplier::find($id);

        if (!$supplier) {
            return response()->json(['error' => 'Proveedor no encontrado'], 404);
        }

        $supplier->update($request->all());

        return response()->json($supplier);
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);

        if (!$supplier) {
            return response()->json(['error' => 'Proveedor no encontrado'], 404);
        }

        $supplier->delete();

        return response()->json(['message' => 'Proveedor eliminado correctamente']);
    }
}
