<?php
// app/Models/Sale.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    // Relación muchos a muchos con Product
    public function products()
    {
        return $this->belongsToMany(Product::class, 'producto_venta');
    }

    // Relación muchos a uno con Cliente
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_cliente', 'id_cliente');
    }

    // Relación muchos a uno con Usuario (User)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }
}
