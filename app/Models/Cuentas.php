<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
  use HasFactory;
    protected $table = 'cuentas';

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