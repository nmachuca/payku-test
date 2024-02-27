<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment_methods = [
            [ 'type' => 'Efectivo' ],
            [ 'type' => 'Tarjeta Crédito' ],
            [ 'type' => 'Tarjeta Débito' ],
            [ 'type' => 'Tarjeta Prepago' ],
            [ 'type' => 'Transferencia' ],
            [ 'type' => 'Electronico' ]
        ];

        DB::table('payment_methods')->insert($payment_methods);
    }
}
