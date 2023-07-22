<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
  use HasFactory;
    protected $table = 'venta';

    protected $fillable = [
   'id',
   'id_usuario',
   'fecha_de_venta',
   'total',
   'status',
   'pagos',
   'created_at',
   'created_update',
    ];
}