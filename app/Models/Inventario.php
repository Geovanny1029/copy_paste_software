<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventario';

    protected $fillable = [
   'id',
   'producto',
   'imagen',
   'cantidad',
   'precio',
   'status',
   'marca_modelo',
   'fecha',
   'Codigo_de_Barras',
   'fecha',
   'created_at',
   'created_update',
    ];
}
