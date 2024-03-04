<?php
// app/Models/Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'celular',
        'codigo_yugioh',
        'codigo_digimon',
        'codigo_onepiece',
        'sharkCoins',
        'deuda'
    ];

    protected $table = 'cliente';

    // Relación uno a muchos con Venta
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    #Uno a muchos de PreSale
    public function preSales()
{
    return $this->hasMany(PreSale::class, 'id_cliente');
}

   #Muchos a muchos con Torneo
public function tournaments()
{
    return $this->belongsToMany(Tournament::class, 'torneo_cliente', 'id_cliente', 'id_torneo')
        ->withPivot(['pago_torneo', 'fecha_pago', 'tipoDePago', 'ingreso'])
        ->withTimestamps();
}

}
