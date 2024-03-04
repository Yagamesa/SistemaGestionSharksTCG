<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSale extends Pivot
{

    use HasFactory;
    use SoftDeletes;
    protected $table = 'producto_venta';
    public $timestamps = true;
    protected $fillable = [
        'cantidad',
        'precio_unitario',
        'total',
        'descuento',
        'saldoPagado',
        'tipoDePago',
        'ingreso',
    ];

    // Puedes agregar otros campos si los necesitas

    // Relación muchos a muchos con Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_producto');
    }

    // Relación muchos a muchos con Sale
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'id_venta');
    }
}
