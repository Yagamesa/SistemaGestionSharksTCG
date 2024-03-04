<?php

// app/Models/PreSale.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PreSale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre_producto',
        'cantidad',
        'precio_unitario',
        'total',
        'saldo',
        'fecha_pago',
        'tipoDePago',
        'ingreso',
        'id_usuario',
        'id_cliente',
    ];

    protected $table = 'preventa';


    // Relación BelongsTo con User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    // Relación BelongsTo con Client
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'id_cliente');
    }
}