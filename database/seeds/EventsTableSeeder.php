<?php

use App\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([

            [
                'name' => 'BrightSpotMrkt',
                'picture' => 'picture.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'www.BrightSpotMrkt.com',
                'capacity' => '100',
                'about_us' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit facere a sint eaque aut quis inventore porro iusto doloribus laboriosam?',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Indonesia Sneaker Yes',
                'picture' => 'picture.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'www.IndonesiaSnkYes.com',
                'capacity' => '80',
                'about_us' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit facere a sint eaque aut quis inventore porro iusto doloribus laboriosam?',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Urban Sneaker Society',
                'picture' => 'picture.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'www.ersneaco.com',
                'capacity' => '100',
                'about_us' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit facere a sint eaque aut quis inventore porro iusto doloribus laboriosam?',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
