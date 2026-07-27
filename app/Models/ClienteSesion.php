<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteSesion extends Model
{
    use HasFactory;

    protected $table = 'cliente_sesion';

    protected $fillable = [
        'cliente_id',
        'descripcion_id',
    ];
    public function administrador()
    {
        return $this->belongsTo(Administrador::class);
    }
}
