<?php

// app/Models/Tournament.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha',
        'id_juego',
    ];

    protected $table = 'torneo';

    // Relación muchos a uno con Game
    public function game()
    {
        return $this->belongsTo(Game::class, 'id_juego');
    }

    // Relación muchos a muchos con Client
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'torneo_cliente');
    }

    

    // Relación uno a muchos con Winner
    public function winners()
    {
        return $this->hasMany(Winner::class, 'id_torneo');
    }
}
