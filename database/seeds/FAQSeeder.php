<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->insert([
            [
                'title' => 'Top Questions',
                'about' => 'Top questions & answers are presented in this section',
                'image' => 'TopQuestion.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Payments & Billing',
                'about' => 'The regular reception of compensation for a repeated service',
                'image' => 'Payment&Billing.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Privacy & Security',
                'about' => 'Safeguarding data of user identity which protect against the unauthorized access of data',
                'image' => 'Privacy&Security.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Store',
                'about' => 'Information about all of the streetwear shop which kept on this website',
                'image' => 'Store.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Returns & Exchanges',
                'about' => 'Inform customer if they want to trade the product because of what not expected at first',
                'image' => 'Return&Exchange.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Shipping',
                'about' => 'Physical moving of good from one point to another which held from warehouse to the customer',
                'image' => 'Shipping.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Return Policy',
                'about' => 'Rules which retailer creates to manage how customers return and exchange unwanted merchandise they purchased',
                'image' => 'ReturnPolicy.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Warranty',
                'about' => 'Guarantee that similar party makes regarding the conditions of its product',
                'image' => 'Warranty.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Product',
                'about' => 'Thing that can be designated as a distinct offering among an organization’s products',
                'image' => 'Product.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Orders',
                'about' => 'Arrangement quantity of a product or product number in the context of a sales order',
                'image' => 'Orders.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Account',
                'about' => 'Information about the functional interface between a source user and a telecommunications system for delivery to a destination user',
                'image' => 'Accounts.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Others',
                'about' => 'Questions which not connected in the previous theme will be putted in here',
                'image' => 'Others.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
