<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'contacto_correo',
    ];

    protected $table = 'proveedor';

    // Relación muchos a muchos con Purchase
    public function purchases()
    {
        return $this->belongsToMany(Purchase::class, 'compra_proveedor', 'id_proveedor', 'id_compra')
            ->withPivot('nombre_producto', 'cantidad', 'precio_unitario', 'total')
            ->withTimestamps();
    }
}
