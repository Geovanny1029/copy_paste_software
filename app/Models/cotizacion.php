<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    use HasFactory;
    protected $table = 'cotizacion';

    protected $fillable = [
   'id',
   'id_usuario',
   'nombre_cotizacion',
   'fecha_de_cotizacion',
   'total',
   'estatus',
];
}
