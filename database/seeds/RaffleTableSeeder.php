<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaffleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('raffles')->insert([
            [
                'rafflename' => 'Gazzele Hi Black & White',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => '338000',
                'raffleimage' => 'image.jpg',
                'rafflequantity' => '10',
                'rafflereleasedate' => Carbon::now()->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::tomorrow()->format('Y-m-d H:i:s'),
                'brand_id' => 1,
                'category_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'Gazzele Hi Pink',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => '338000',
                'raffleimage' => 'image.jpg',
                'rafflequantity' => '10',
                'rafflereleasedate' => Carbon::now()->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::tomorrow()->format('Y-m-d H:i:s'),
                'brand_id' => 2,
                'category_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'Gazzele Low Blue Sky',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => '338000',
                'raffleimage' => 'image.jpg',
                'rafflequantity' => '10',
                'rafflereleasedate' => Carbon::now()->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::tomorrow()->format('Y-m-d H:i:s'),
                'brand_id' => 3,
                'category_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]

        ]);
    }
}
