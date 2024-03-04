<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseSupplier extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'compra_proveedor';

    protected $fillable = [
        'nombre_producto',
        'cantidad',
        'precio_unitario',
        'total',
        'tipoDePago',
        'egreso'

        // Agrega otros campos si los hay
    ];

    #compra
    public function purchase(): BelongsTo
    {
        return $this->belongsTo(Purchase::class, 'id_compra');
    }
   # proveedor
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_proveedor');
    }
}
