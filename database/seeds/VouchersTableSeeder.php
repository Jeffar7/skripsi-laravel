<?php

use Carbon\Carbon;
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
            'category' =>'bronze',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Voucher::create([
            'code' => 'DEF456',
            'type' => 'percent',
            'percent_off' => 10,
            'category' => 'silver',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Voucher::create([
            'code' => 'GHI789',
            'type' => 'percent',
            'percent_off' => 20,
            'category' => 'gold',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Voucher::create([
            'code' => 'JKL123',
            'type' => 'fixed',
            'value' => 50000,
            'category' => 'platinum',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}