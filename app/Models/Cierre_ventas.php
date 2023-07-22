<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cierre_ventas extends Model
{
    use HasFactoryuse HasFactory;
    protected $table = 'cierre_ventas';

    protected $fillable = [
   'id',
   'id_usuario',
   'total',
   'fecha_cierre',
   'created_at',
   'created_update',
    ];
}

