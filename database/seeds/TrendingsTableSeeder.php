<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrendingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trendings')->insert([
            [
                'product_id' => 1
            ],
            [
                'product_id' => 81
            ],
            [
                'product_id' => 74
            ],
            [
                'product_id' => 45
            ],
            [
                'product_id' => 56
            ],
            [
                'product_id' => 67
            ],
            [
                'product_id' => 78
            ],
            [
                'product_id' => 89
            ],
            [
                'product_id' => 90
            ],
            [
                'product_id' => 10
            ],
            [
                'product_id' => 20
            ],
            [
                'product_id' => 13
            ],
        ]);
    }
}
