<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'brandid' => 1,
                'categoryid' => 1,
                'productname' => 'Ahha Hoodie',
                'productdescription' => 'Lorem Ipsum',
                'productprice' => '200000',
                'productsize' => 'XL',
                'productquantity' => '20',
                'productimage' => 'picture.jpg'
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'productname' => 'Ahha Tshirt',
                'productdescription' => 'Lorem Ipsum',
                'productprice' => '300000',
                'productsize' => 'L',
                'productquantity' => '25',
                'productimage' => 'picture.jpg'
            ],
            [
                'brandid' => 3,
                'categoryid' => 2,
                'productname' => 'Shopataleen T-Shirt',
                'productdescription' => 'Lorem Ipsum',
                'productprice' => '200000',
                'productsize' => 'XL',
                'productquantity' => '20',
                'productimage' => 'picture.jpg'
            ],
            [
                'brandid' => 2,
                'categoryid' => 2,
                'productname' => 'Shining Hoodie',
                'productdescription' => 'Lorem Ipsum',
                'productprice' => '250000',
                'productsize' => 'M',
                'productquantity' => '25',
                'productimage' => 'picture.jpg'
            ],
            [
                'brandid' => 2,
                'categoryid' => 3,
                'productname' => 'Shining T-shirt',
                'productdescription' => 'Lorem Ipsum',
                'productprice' => '100000',
                'productsize' => 'L',
                'productquantity' => '22',
                'productimage' => 'picture.jpg'
            ],
            [
                'brandid' => 3,
                'categoryid' => 3,
                'productname' => 'Shopataleen Hoodie',
                'productdescription' => 'Lorem Ipsum',
                'productprice' => '280000',
                'productsize' => 'XL',
                'productquantity' => '20',
                'productimage' => 'picture.jpg'
            ]
        ]);
    }
}
