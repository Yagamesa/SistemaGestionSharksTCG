<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Supplier extends Model
{
    use HasFactory;
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
        return $this->belongsToMany(Purchase::class, 'compra_proveedor', 'id_proveedor', 'id_compra');
    }
    
}
