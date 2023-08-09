<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cotizacion_producto extends Model
{
    use HasFactory;
    protected $table = 'cotizacion_producto';

    protected $fillable = [
   'id',
   'folio_cotizacion',
   'id_producto',
   'cantidad',
   'precio',
    ];
}
