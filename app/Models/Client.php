<?php
// app/Models/Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'celular',
        'codigo_yugioh',
        'codigo_digimon',
        'codigo_onepiece',
    ];

    protected $table = 'cliente';

    // Relación uno a muchos con Venta
    public function sales()
    {
        return $this->hasMany(Sale::class, 'id_cliente', 'id_cliente');
    }

    
}
