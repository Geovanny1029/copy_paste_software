<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre_completo' => 'administrador de sistema',
            'login' => 'admin',          
            'tipo'  => 1,
            'fecha_creacion' => Carbon::now()->format('Y-m-d'),
            'estatus'  => 1,
            'password'  => bcrypt('123'),
        ]);
    }
}
