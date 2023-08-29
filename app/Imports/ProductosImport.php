<?php

namespace App\Imports;

use App\Models\Inventario;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductosImport implements ToCollection, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        foreach ($rows as $row) {



            $producto = Inventario::find($row['id']);
            $producto->producto = $row['producto'];
            $producto->cantidad = $row['cantidad'];
            $producto->precio = $row['precio'];
            $producto->marca_modelo = $row['marca_modelo'];
            $producto->fecha = $row['fecha'];
            $producto->cantidad = $row['cantidad'];
            $producto->estatus = $row['estatus'];
            $producto->save();

            // $insert = $row->merge(['estatus' => 1])
            //     ->skipUntil(fn($value, $index) => $index !== 'id')
            //     ->all();

            // DB::table('inventario')->updateOrInsert(
            //     ['producto' => $row['producto'],
            //      'cantidad' => $row['cantidad'],
            //      'precio' => $row['precio'],
            //      'marca_modelo' => $row['marca_modelo'],
            //      'fecha' => $row['fecha'],

            //      'estatus' => $row['estatus']
            //         ],
            //     $insert
            // );
        }

    }
}
