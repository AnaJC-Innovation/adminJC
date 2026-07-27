<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescripcionesCheck extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcionelearning',
        'checklistelearning',
        'descripcionApp',
        'checklistApp',
        'descripcionWeb',
        'checklistWeb',
    ];
    public function administrador()
    {
        return $this->belongsTo(Administrador::class);
    }
}
