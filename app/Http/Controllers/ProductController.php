<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        return response()->json($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'id_categoria' => 'required|exists:categoria,id',
            'stock' => 'nullable',
            'precio_compra' => 'nullable',
            'precio_venta' => 'nullable',
            'precio_preventa' => 'nullable',
            'precio_sharkcoins' => 'nullable',
        ]);

        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'id_categoria' => 'required|exists:categoria,id',
            'stock' => 'nullable',
            'precio_compra' => 'nullable',
            'precio_venta' => 'nullable',
            'precio_preventa' => 'nullable',
            'precio_sharkcoins' => 'nullable',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        $product->update($request->all());

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Producto eliminado correctamente']);
    }

    public function searchByName(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $name = $request->input('nombre');

        $products = Product::where('nombre', 'like', '%' . $name . '%')->get();

        return response()->json($products);
    }
}
