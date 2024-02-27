<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Alice',
                'age' => 25,
                'region' => 'Metropolitana',
                'salary' => 70000
            ],
            [
                'name' => 'Bob',
                'age' => 30,
                'region' => 'Valparaíso',
                'salary' => 80000
            ],
            [
                'name' => 'Carlos',
                'age' => 28,
                'region' => 'Biobío',
                'salary' => 65000
            ],
            [
                'name' => 'Diana',
                'age' => 32,
                'region' => 'Araucanía',
                'salary' => 72000
            ],
            [
                'name' => 'Elena',
                'age' => 29,
                'region' => 'Los Lagos',
                'salary' => 68000
            ],
            [
                'name' => 'Felipe',
                'age' => 35,
                'region' => 'Atacama',
                'salary' => 78000
            ],
            [
                'name' => 'Gloria',
                'age' => 27,
                'region' => 'Coquimbo',
                'salary' => 66000
            ],
            [
                'name' => 'Héctor',
                'age' => 33,
                'region' => 'Magallanes',
                'salary' => 70000
            ],
            [
                'name' => 'Irene',
                'age' => 31,
                'region' => 'Maule',
                'salary' => 69000
            ],
            [
                'name' => 'Jorge',
                'age' => 34,
                'region' => 'Tarapacá',
                'salary' => 71000
            ],
            [
                'name' => 'Karen',
                'age' => 26,
                'region' => 'Antofagasta',
                'salary' => null
            ],
            [
                'name' => 'Luis',
                'age' => 29,
                'region' => 'Ñuble',
                'salary' => 67000
            ],
            [
                'name' => 'Mónica',
                'age' => 28,
                'region' => 'OHiggins',
                'salary' => 75000
            ],
            [
                'name' => 'Nicolás',
                'age' => 30,
                'region' => 'Los Ríos',
                'salary' => 0
            ],
            [
                'name' => 'Olivia',
                'age' => 27,
                'region' => 'Aysén',
                'salary' => null
            ],
            [
                'name' => 'Pablo',
                'age' => 32,
                'region' => 'Arica y Parinacota',
                'salary' => 74000
            ],
            [
                'name' => 'Quintina',
                'age' => 31,
                'region' => 'Santiago',
                'salary' => 77000
            ],
            [
                'name' => 'Ramiro',
                'age' => 33,
                'region' => 'Chiloé',
                'salary' => 71000
            ],
            [
                'name' => 'Sonia',
                'age' => 29,
                'region' => 'Iquique',
                'salary' => 69000
            ],
            [
                'name' => 'Tomás',
                'age' => 35,
                'region' => 'Punta Arenas',
                'salary' => 80000
            ],
        ];

        DB::table('users')->insert($users);
    }
}
