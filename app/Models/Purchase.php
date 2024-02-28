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
        'fecha_compra',
        // Agrega otros campos específicos de Purchase aquí
    ];

    protected $table = 'compra';

    // Relación muchos a uno con User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    // Relación muchos a muchos con Supplier
    public function suppliers(): BelongsToMany
    {
        return $this->belongsToMany(Supplier::class, 'compra_proveedor');
    }

  
}
