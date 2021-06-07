<?php

use App\Voucher;
use Illuminate\Database\Seeder;

class VouchersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voucher::create([
            'code' => 'ABC123',
            'type' => 'fixed',
            'value' => 20000,
            'category' =>'bronze'
        ]);
        Voucher::create([
            'code' => 'DEF456',
            'type' => 'percent',
            'percent_off' => 10,
            'category' => 'silver'
        ]);
        Voucher::create([
            'code' => 'GHI789',
            'type' => 'percent',
            'percent_off' => 20,
            'category' => 'gold'
        ]);
        Voucher::create([
            'code' => 'JKL123',
            'type' => 'fixed',
            'value' => 50000,
            'category' => 'platinum'
        ]);
    }
}