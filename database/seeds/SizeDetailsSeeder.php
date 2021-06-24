<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeDetailsSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size_details')->insert([
            [
                'category' => 'TOP',
                'size' => 'XS',
                'category_id' => 1
            ],
            [
                'category' => 'TOP',
                'size' => 'S',
                'category_id' => 1
            ],
            [
                'category' => 'TOP',
                'size' => 'M',
                'category_id' => 1
            ],
            [
                'category' => 'TOP',
                'size' => 'L',
                'category_id' => 1
            ],
            [
                'category' => 'TOP',
                'size' => 'XL',
                'category_id' => 1
            ],
            [
                'category' => 'TOP',
                'size' => 'XXL',
                'category_id' => 1
            ],
            [
                'category' => 'BOTTOM',
                'size' => 'XS',
                'category_id' => 2
            ],
            [
                'category' => 'BOTTOM',
                'size' => 'S',
                'category_id' => 2
            ],
            [
                'category' => 'BOTTOM',
                'size' => 'M',
                'category_id' => 2
            ],
            [
                'category' => 'BOTTOM',
                'size' => 'L',
                'category_id' => 2
            ],
            [
                'category' => 'BOTTOM',
                'size' => 'XL',
                'category_id' => 2
            ],
            [
                'category' => 'BOTTOM',
                'size' => 'XXL',
                'category_id' => 2
            ],
            [
                'category' => 'SHOES',
                'size' => '37',
                'category_id' => 3
            ],
            [
                'category' => 'SHOES',
                'size' => '38',
                'category_id' => 3
            ],
            [
                'category' => 'SHOES',
                'size' => '39',
                'category_id' => 3
            ],
            [
                'category' => 'SHOES',
                'size' => '40',
                'category_id' => 3
            ],
            [
                'category' => 'SHOES',
                'size' => '41',
                'category_id' => 3
            ],
            [
                'category' => 'SHOES',
                'size' => '42',
                'category_id' => 3
            ],
            [
                'category' => 'SHOES',
                'size' => '43',
                'category_id' => 3
            ],
            [
                'category' => 'SHOES',
                'size' => '44',
                'category_id' => 3
            ]
        ]);
    }
}
