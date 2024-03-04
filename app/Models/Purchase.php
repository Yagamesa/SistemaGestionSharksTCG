<?php

// app/Models/Purchase.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
class Purchase extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_usuario',
        'fecha_compra'
    ];

    protected $table = 'compra';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    
    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'compra_proveedor', 'id_compra', 'id_proveedor')
            ->withPivot(['nombre_producto', 'cantidad', 'precio_unitario', 'total', 'tipoDePago', 'egreso']);
    }
}