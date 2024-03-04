<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TournamentClient extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = 'torneo_cliente';

    protected $fillable = [
        'pago_torneo',
        'fecha_pago',
        'tipoDePago',
        'ingreso'
        
    ];

// Relación muchos a uno con Tournament
public function tournament(): BelongsTo
{
    return $this->belongsTo(Tournament::class, 'id_torneo');
}

// Relación muchos a uno con Client
public function client(): BelongsTo
{
    return $this->belongsTo(Client::class, 'id_cliente');
}
}