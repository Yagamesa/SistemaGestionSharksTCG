<?php
// app/Models/Product.php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_categoria',
        'stock',
        'precio_compra',
        'precio_venta',
        'precio_preventa',
    ];

    protected $table = 'producto';

    // Relación muchos a uno con Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categoria', 'id_categoria');
    }

    // Relación muchos a muchos con Sale
    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'producto_venta');
    }
}

