<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [ 'amount' => 1210, 'payment_method_id'=> 2 ],
            [ 'amount' => 1220, 'payment_method_id'=> 3 ],
            [ 'amount' => 1230, 'payment_method_id'=> 4 ],
            [ 'amount' => 1240, 'payment_method_id'=> 5 ],
            [ 'amount' => 1250, 'payment_method_id'=> 1 ],
            [ 'amount' => 1260, 'payment_method_id'=> 2 ],
            [ 'amount' => 1270, 'payment_method_id'=> 3 ],
            [ 'amount' => 1280, 'payment_method_id'=> 4 ],
            [ 'amount' => 1290, 'payment_method_id'=> 5 ],
            [ 'amount' => 1300, 'payment_method_id'=> 1 ],
            [ 'amount' => 1310, 'payment_method_id'=> 2 ],
            [ 'amount' => 1320, 'payment_method_id'=> 3 ],
            [ 'amount' => 1330, 'payment_method_id'=> 4 ],
            [ 'amount' => 13.40, 'payment_method_id'=> 5 ],
            [ 'amount' => 1350, 'payment_method_id'=> 1 ],
            [ 'amount' => 1360, 'payment_method_id'=> 2 ],
            [ 'amount' => 1370, 'payment_method_id'=> 3 ],
            [ 'amount' => 1380, 'payment_method_id'=> 4 ],
            [ 'amount' => 1390, 'payment_method_id'=> 5 ],
            [ 'amount' => 1400, 'payment_method_id'=> 1 ],
            [ 'amount' => 1410, 'payment_method_id'=> 2 ],
            [ 'amount' => 1420, 'payment_method_id'=> 3 ],
            [ 'amount' => 1430, 'payment_method_id'=> 4 ],
            [ 'amount' => 1440, 'payment_method_id'=> 5 ],
            [ 'amount' => 1450, 'payment_method_id'=> 1 ],
            [ 'amount' => 1460, 'payment_method_id'=> 2 ],
            [ 'amount' => 1470, 'payment_method_id'=> 3 ],
            [ 'amount' => 1480, 'payment_method_id'=> 4 ],
            [ 'amount' => 1490, 'payment_method_id'=> 5 ],
            [ 'amount' => 1500, 'payment_method_id'=> 1 ],
            [ 'amount' => 1510, 'payment_method_id'=> 2 ],
            [ 'amount' => 1520, 'payment_method_id'=> 3 ],
            [ 'amount' => 1530, 'payment_method_id'=> 4 ],
            [ 'amount' => 1540, 'payment_method_id'=> 5 ],
            [ 'amount' => 1550, 'payment_method_id'=> 1 ],
            [ 'amount' => 1560, 'payment_method_id'=> 2 ],
            [ 'amount' => 1570, 'payment_method_id'=> 3 ],
            [ 'amount' => 1580, 'payment_method_id'=> 4 ],
            [ 'amount' => 1590, 'payment_method_id'=> 5 ],
            [ 'amount' => 1600, 'payment_method_id'=> 1 ],
            [ 'amount' => 1610, 'payment_method_id'=> 2 ],
            [ 'amount' => 1620, 'payment_method_id'=> 3 ],
            [ 'amount' => 1630, 'payment_method_id'=> 4 ],
            [ 'amount' => 1640, 'payment_method_id'=> 5 ],
            [ 'amount' => 1650, 'payment_method_id'=> 1 ],
            [ 'amount' => 160, 'payment_method_id'=> 2 ],
            [ 'amount' => 1670, 'payment_method_id'=> 3 ],
            [ 'amount' => 1680, 'payment_method_id'=> 4 ],
            [ 'amount' => 1690, 'payment_method_id'=> 5 ],
            [ 'amount' => 1700, 'payment_method_id'=> 1 ],
            [ 'amount' => 1710, 'payment_method_id'=> 2 ],
            [ 'amount' => 1720, 'payment_method_id'=> 3 ],
            [ 'amount' => 1730, 'payment_method_id'=> 4 ],
            [ 'amount' => 1740, 'payment_method_id'=> 5 ],
            [ 'amount' => 1750, 'payment_method_id'=> 1 ],
            [ 'amount' => 1760, 'payment_method_id'=> 2 ],
            [ 'amount' => 1770, 'payment_method_id'=> 3 ],
            [ 'amount' => 1780, 'payment_method_id'=> 4 ],
            [ 'amount' => 1790, 'payment_method_id'=> 5 ],
            [ 'amount' => 1800, 'payment_method_id'=> 1 ],
        ];

        DB::table('transactions')->insert($transactions);
    }
}
