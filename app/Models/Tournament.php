<?php

// app/Models/Tournament.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'fecha',
        
    ];

    protected $table = 'torneo';

    
    // Relación muchos a muchos con Client
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'torneo_cliente', 'id_torneo',
         'id_cliente')->withTimestamps();
    }
    

}
