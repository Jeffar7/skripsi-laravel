<?php

use App\DetailAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailAddressSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailaddresses')->insert([
            [
                'city' => 'Jakarta Barat',
                'province' => 'Jawa',
                'zip_code' => '11480',
                'country' => 'Indonesia',
                'user_id' => 1
            ],
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'zip_code' => '11481',
                'country' => 'Indonesia',
                'user_id' => 2
            ]

        ]);
    }
}
