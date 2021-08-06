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
                'rafflename' => 'BLK Buck Barkley Saint Cls Heaven',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => 648000,
                'raffleimage' => 'raffle3.jpg',
                'rafflequantity' => 10,
                'rafflequota' => 15,
                'rafflereleasedate' => Carbon::create(2021, 7, 1)->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::create(2021, 7, 5)->format('Y-m-d H:i:s'),
                'brand_id' => 1,
                'category_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'BLK Buck Barkley Saint Cls Heaven',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => 648000,
                'raffleimage' => 'raffle4.jpg',
                'rafflequantity' => 10,
                'rafflequota' => 15,
                'rafflereleasedate' => Carbon::now()->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::tomorrow()->format('Y-m-d H:i:s'),
                'brand_id' => 1,
                'category_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'NAH Project Shoes',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => 400000,
                'raffleimage' => 'raffle1.jpg',
                'rafflequantity' => 10,
                'rafflequota' => 15,
                'rafflereleasedate' => Carbon::now()->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::create(2021, 7, 30)->format('Y-m-d H:i:s'),
                'brand_id' => 1,
                'category_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'Compass Gazelle Low Black White',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => 350000,
                'raffleimage' => 'raffle2.jpg',
                'rafflequantity' => 10,
                'rafflequota' => 15,
                'rafflereleasedate' => Carbon::now()->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::create(2021, 7, 30)->format('Y-m-d H:i:s'),
                'brand_id' => 6,
                'category_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'Geoff Max Official - Authentic Black Gum',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => 352000,
                'raffleimage' => 'raffle3.jpg',
                'rafflequantity' => 10,
                'rafflequota' => 15,
                'rafflereleasedate' => Carbon::now()->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::create(2021, 7, 30)->format('Y-m-d H:i:s'),
                'brand_id' => 3,
                'category_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'Imperior Footwer Dalton High Black White',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => 320000,
                'raffleimage' => 'raffle3.jpg',
                'rafflequantity' => 10,
                'rafflequota' => 15,
                'rafflereleasedate' => Carbon::create(2021, 7, 10)->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::create(2021, 7, 15)->format('Y-m-d H:i:s'),
                'brand_id' => 3,
                'category_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rafflename' => 'FLEXKNIT V3.0 AQUATIC BLUE',
                'raffledescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, harum.',
                'raffleprice' => 415000,
                'raffleimage' => 'raffle3.jpg',
                'rafflequantity' => 10,
                'rafflequota' => 15,
                'rafflereleasedate' => Carbon::create(2021, 7, 10)->format('Y-m-d H:i:s'),
                'raffleclosedate' => Carbon::create(2021, 7, 15)->format('Y-m-d H:i:s'),
                'brand_id' => 7,
                'category_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
