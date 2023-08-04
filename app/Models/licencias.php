<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licencias extends Model
{
    use HasFactory;
    protected $table = 'licencias';

    protected $fillable = [
   'id',
   'negocio',
   'tipo_licencia',
   'fecha_vigencia',
   'estatus',

    ];
}
