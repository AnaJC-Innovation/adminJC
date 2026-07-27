<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Administrador extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'cliente',
        'url',
        'user',
        'password',
        'activo'
    ];
    public function clienteSesiones()
    {
        return $this->belongsTo(ClienteSesion::class);
    }
}
