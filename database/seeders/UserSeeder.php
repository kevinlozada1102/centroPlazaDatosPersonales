<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(
            [
                'name' => 'Kevin Lozada',
                'email' => 'kevinlozada1102@gmail.com',
                'password' => bcrypt('arnold11'),
            ]
        );
        User::create(
            [
                'name' => 'Rosaura Cotos',
                'email' => 'rosacotossullon@gmail.com',
                'password' => bcrypt('rosa1234'),
            ]
        );

    }
}
