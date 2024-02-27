<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movements = [
            [ 'user_id' => 3, 'transaction_id' => 48, 'region' => 'Metropolitana', 'payment_method_id' => 4 ],
            [ 'user_id' => 3, 'transaction_id' => 21, 'region' => 'Metropolitana', 'payment_method_id' => 2 ],
            [ 'user_id' => 3, 'transaction_id' => 19, 'region' => 'Metropolitana', 'payment_method_id' => 5 ],
            [ 'user_id' => 19, 'transaction_id' => 42, 'region' => 'Valparaíso', 'payment_method_id' => 3 ],
            [ 'user_id' => 19, 'transaction_id' => 47, 'region' => 'Valparaíso', 'payment_method_id' => 3 ],
            [ 'user_id' => 19, 'transaction_id' => 1, 'region' => 'Valparaíso', 'payment_method_id' => 2 ],
            [ 'user_id' => 10, 'transaction_id' => 2, 'region' => 'Biobío', 'payment_method_id' => 3 ],
            [ 'user_id' => 10, 'transaction_id' => 33, 'region' => 'Biobío', 'payment_method_id' => 4 ],
            [ 'user_id' => 10, 'transaction_id' => 50, 'region' => 'Biobío', 'payment_method_id' => 1 ],
            [ 'user_id' => 6, 'transaction_id' => 3, 'region' => 'Araucanía', 'payment_method_id' => 4 ],
            [ 'user_id' => 6, 'transaction_id' => 8, 'region' => 'Araucanía', 'payment_method_id' => 4 ],
            [ 'user_id' => 6, 'transaction_id' => 32, 'region' => 'Araucanía', 'payment_method_id' => 3 ],
            [ 'user_id' => 9, 'transaction_id' => 23, 'region' => 'Los Lagos', 'payment_method_id' => 4 ],
            [ 'user_id' => 9, 'transaction_id' => 34, 'region' => 'Los Lagos', 'payment_method_id' => 5 ],
            [ 'user_id' => 9, 'transaction_id' => 5, 'region' => 'Los Lagos', 'payment_method_id' => 1 ],
            [ 'user_id' => 7, 'transaction_id' => 24, 'region' => 'Atacama', 'payment_method_id' => 5 ],
            [ 'user_id' => 7, 'transaction_id' => 25, 'region' => 'Atacama', 'payment_method_id' => 1 ],
            [ 'user_id' => 7, 'transaction_id' => 16, 'region' => 'Atacama', 'payment_method_id' => 2 ],
            [ 'user_id' => 17, 'transaction_id' => 53, 'region' => 'Coquimbo', 'payment_method_id' => 4 ],
            [ 'user_id' => 17, 'transaction_id' => 40, 'region' => 'Coquimbo', 'payment_method_id' => 1 ],
            [ 'user_id' => 17, 'transaction_id' => 31, 'region' => 'Coquimbo', 'payment_method_id' => 2 ],
            [ 'user_id' => 2, 'transaction_id' => 6, 'region' => 'Magallanes', 'payment_method_id' => 2 ],
            [ 'user_id' => 2, 'transaction_id' => 18, 'region' => 'Magallanes', 'payment_method_id' => 4 ],
            [ 'user_id' => 2, 'transaction_id' => 60, 'region' => 'Magallanes', 'payment_method_id' => 1 ],
            [ 'user_id' => 12, 'transaction_id' => 58, 'region' => 'Maule', 'payment_method_id' => 4 ],
            [ 'user_id' => 12, 'transaction_id' => 20, 'region' => 'Maule', 'payment_method_id' => 1 ],
            [ 'user_id' => 12, 'transaction_id' => 14, 'region' => 'Maule', 'payment_method_id' => 5 ],
            [ 'user_id' => 11, 'transaction_id' => 15, 'region' => 'Tarapacá', 'payment_method_id' => 1 ],
            [ 'user_id' => 11, 'transaction_id' => 30, 'region' => 'Tarapacá', 'payment_method_id' => 1 ],
            [ 'user_id' => 11, 'transaction_id' => 11, 'region' => 'Tarapacá', 'payment_method_id' => 2 ],
            [ 'user_id' => 18, 'transaction_id' => 29, 'region' => 'Antofagasta', 'payment_method_id' => 5 ],
            [ 'user_id' => 18, 'transaction_id' => 55, 'region' => 'Antofagasta', 'payment_method_id' => 1 ],
            [ 'user_id' => 18, 'transaction_id' => 49, 'region' => 'Antofagasta', 'payment_method_id' => 5 ],
            [ 'user_id' => 4, 'transaction_id' => 45, 'region' => 'Ñuble', 'payment_method_id' => 1 ],
            [ 'user_id' => 4, 'transaction_id' => 28, 'region' => 'Ñuble', 'payment_method_id' => 4 ],
            [ 'user_id' => 4, 'transaction_id' => 36, 'region' => 'Ñuble', 'payment_method_id' => 2 ],
            [ 'user_id' => 8, 'transaction_id' => 4, 'region' => 'Aysén', 'payment_method_id' => 5 ],
            [ 'user_id' => 8, 'transaction_id' => 44, 'region' => 'Aysén', 'payment_method_id' => 5 ],
            [ 'user_id' => 8, 'transaction_id' => 10, 'region' => 'Aysén', 'payment_method_id' => 1 ],
            [ 'user_id' => 20, 'transaction_id' => 12, 'region' => 'OHiggins', 'payment_method_id' => 3 ],
            [ 'user_id' => 20, 'transaction_id' => 51, 'region' => 'OHiggins', 'payment_method_id' => 2 ],
            [ 'user_id' => 20, 'transaction_id' => 27, 'region' => 'OHiggins', 'payment_method_id' => 3 ],
            [ 'user_id' => 1, 'transaction_id' => 41, 'region' => 'Punta Arenas', 'payment_method_id' => 2 ],
            [ 'user_id' => 1, 'transaction_id' => 7, 'region' => 'Punta Arenas', 'payment_method_id' => 3 ],
            [ 'user_id' => 1, 'transaction_id' => 26, 'region' => 'Punta Arenas', 'payment_method_id' => 2 ],
            [ 'user_id' => 13, 'transaction_id' => 38, 'region' => 'Arica y Parinacota', 'payment_method_id' => 4 ],
            [ 'user_id' => 13, 'transaction_id' => 37, 'region' => 'Arica y Parinacota', 'payment_method_id' => 3 ],
            [ 'user_id' => 13, 'transaction_id' => 35, 'region' => 'Arica y Parinacota', 'payment_method_id' => 1 ],
            [ 'user_id' => 15, 'transaction_id' => 17, 'region' => 'Chiloé', 'payment_method_id' => 3 ],
            [ 'user_id' => 15, 'transaction_id' => 43, 'region' => 'Chiloé', 'payment_method_id' => 4 ],
            [ 'user_id' => 15, 'transaction_id' => 56, 'region' => 'Chiloé', 'payment_method_id' => 2 ],
            [ 'user_id' => 16, 'transaction_id' => 57, 'region' => 'Iquique', 'payment_method_id' => 3 ],
            [ 'user_id' => 16, 'transaction_id' => 54, 'region' => 'Iquique', 'payment_method_id' => 5 ],
            [ 'user_id' => 16, 'transaction_id' => 39, 'region' => 'Iquique', 'payment_method_id' => 5 ],
            [ 'user_id' => 14, 'transaction_id' => 9, 'region' => 'Los Ríos', 'payment_method_id' => 5 ],
            [ 'user_id' => 14, 'transaction_id' => 52, 'region' => 'Los Ríos', 'payment_method_id' => 3 ],
            [ 'user_id' => 14, 'transaction_id' => 46, 'region' => 'Los Ríos', 'payment_method_id' => 2 ],
            [ 'user_id' => 5, 'transaction_id' => 13, 'region' => 'Santiago', 'payment_method_id' => 4 ],
            [ 'user_id' => 5, 'transaction_id' => 59, 'region' => 'Santiago', 'payment_method_id' => 5 ],
            [ 'user_id' => 5, 'transaction_id' => 22, 'region' => 'Santiago', 'payment_method_id' => 3 ],
        ];

        DB::table('movements')->insert($movements);
    }
}
