<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta_folio_producto extends Model
{
    use HasFactory;
    protected $table = 'venta_folio_producto';

    protected $fillable = [
   'id',
   'folio',
   'id_producto',
   'cantidad',
   'precio',
];

}
