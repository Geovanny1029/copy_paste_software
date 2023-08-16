<?php

namespace App\Exports;

use App\Models\Inventario;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;


class ProductosExport implements ShouldAutoSize, FromQuery, WithHeadings
{
    
  use Exportable;

  public function query()
  {
    return Inventario::select(
	    'id',
	    'producto',
	    'cantidad',
	    'precio',
	    'marca_modelo',
	    'fecha',
	    'Codigo_de_barras',
	    'estatus'
    );
  }

  public function headings(): array
  {
    return [
    	    'id',
	    'producto',
	    'cantidad',
	    'precio',
	    'marca_modelo',
	    'fecha',
	    'Codigo_de_barras',
	    'estatus'
    ];
  }
}