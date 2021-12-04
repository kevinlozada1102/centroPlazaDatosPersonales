<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        Persona::create(
        [
            'nombre' => "Kevin Arnold",
            'apellido' => "Lozada Tabohada",
            'email' => "Lozada Tabohada@gmail.com",
            'dni' => "4356",
            'telefono' => "935462154",
            'direccion' => "Los Algarrobos, Piura",
        ]);
    }
}
