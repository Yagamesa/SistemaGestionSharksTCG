<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseSupplier extends Model
{
    protected $table = 'compra_proveedor';

    protected $fillable = [
        'id_compra',
        'id_proveedor',
        'nombre_producto',
        'cantidad',
        'precio_unitario',
        'total',
        // Agrega otros campos si los hay
    ];

    // Relación muchos a uno con Purchase
    public function purchase(): BelongsTo
    {
        return $this->belongsTo(Purchase::class, 'id_compra');
    }

    // Relación muchos a uno con Supplier
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_proveedor');
    }
}
