<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vistas extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'vt_cotizacion_productos';

    protected $fillable = [
   'id',
   'folio_cotizacion',
   'producto',
   'cantidad',
   'precio',
     ];
}
