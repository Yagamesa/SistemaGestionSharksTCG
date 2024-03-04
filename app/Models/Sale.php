<?php
// app/Models/Sale.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_cliente',
        'id_usuario',
        'fecha_venta',
        
    ];

    protected $table = 'venta';

       // Relación BelongsToMany con Product
       public function products(): BelongsToMany
       {
           return $this->belongsToMany(Product::class, 'producto_venta', 'id_venta', 'id_producto')
               ->withPivot(['cantidad', 'total', 'descuento', 'saldoPagado', 'tipoDePago', 'ingreso'])
               ->withTimestamps();
       }
   
       // Relación BelongsTo con Client
       public function client(): BelongsTo
       {
           return $this->belongsTo(Client::class, 'id_cliente');
       }
   
       // Relación BelongsTo con User
       public function user(): BelongsTo
       {
           return $this->belongsTo(User::class, 'id_usuario');
       }
}
