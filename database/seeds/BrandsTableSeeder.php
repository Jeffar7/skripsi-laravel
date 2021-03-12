<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'AHHA',
                'picture' => 'picture.jpg',
                'owner' => 'atta halilintar',
                'website' => 'www.ahhasquad.com',
                'about' => 'lorem ipsum'
            ],
            [
                'name' => 'Shining Bright',
                'picture' => 'picture.jpg',
                'owner' => 'Tarra Budiman',
                'website' => 'www.shiningbright.com',
                'about' => 'lorem ipsum'
            ],
            [
                'name' => 'Shopataleen',
                'picture' => 'picture.jpg',
                'owner' => 'Shopataleen',
                'website' => 'www.shopataleen.com',
                'about' => 'lorem ipsum'
            ],
            [
                'name' => 'Screamous',
                'picture' => 'picture.jpg',
                'owner' => 'Screamous',
                'website' => 'www.screamous.com',
                'about' => 'lorem ipsum'
            ],
            [
                'name' => 'Adorable Projects',
                'picture' => 'picture.jpg',
                'owner' => 'Shopataleen',
                'website' => 'http://adorableprojects.com/',
                'about' => 'lorem ipsum'
            ],

        ]);
    }
}
