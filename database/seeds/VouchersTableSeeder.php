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
            'value' => 20000
        ]);
        Voucher::create([
            'code' => 'DEF456',
            'type' => 'percent',
            'percent_off' => 10
        ]);
    }
}
