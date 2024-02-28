<?php

// app/Models/PreSale.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreSale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre_producto',
        'cantidad',
        'precio_unitario',
        'total',
        'estado',
        'fecha_pago',
        'id_usuario',
        'id_cliente',
    ];

    protected $table = 'preventa';

    // Relación muchos a uno con User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    // Relación muchos a uno con Client
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_cliente');
    }
}
