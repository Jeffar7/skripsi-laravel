<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageDetailProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagedetail')->insert([
            [
                'image_detail_1' => 'image_detail_1_1.jpg',
                'image_detail_2' => 'image_detail_1_2.jpg',
                'image_detail_3' => 'image_detail_1_3.jpg',
                'image_detail_4' => 'image_detail_1_4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'image_detail_2_1.jpg',
                'image_detail_2' => 'image_detail_2_2.jpg',
                'image_detail_3' => 'image_detail_2_3.jpg',
                'image_detail_4' => 'image_detail_2_4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'image_detail_3_1.jpg',
                'image_detail_2' => 'image_detail_3_2.jpg',
                'image_detail_3' => 'image_detail_3_3.jpg',
                'image_detail_4' => 'image_detail_3_4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'image_detail_4_1.jpg',
                'image_detail_2' => 'image_detail_4_2.jpg',
                'image_detail_3' => 'image_detail_4_3.jpg',
                'image_detail_4' => 'image_detail_4_4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'image_detail_5_1.jpg',
                'image_detail_2' => 'image_detail_5_2.jpg',
                'image_detail_3' => 'image_detail_5_3.jpg',
                'image_detail_4' => 'image_detail_5_4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'image_detail_6_1.jpg',
                'image_detail_2' => 'image_detail_6_2.jpg',
                'image_detail_3' => 'image_detail_6_3.jpg',
                'image_detail_4' => 'image_detail_6_4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
