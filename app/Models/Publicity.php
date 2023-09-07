<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_espectacular',
        'numero_fiscalizacion',
        'alias',
        'tipo',
        'google_data',
        'direccion',
        'colonia',
        'ciudad',
        'estado',
    ];
}
