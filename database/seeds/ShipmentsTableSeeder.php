<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipments')->insert([

            [
                'shipment_method' => 'JNE Regular',
                'delivery_cost' => '35000',
                'estimated_delivery' => '2-3 days',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'shipment_method' => 'Sicepat Regular',
                'delivery_cost' => '40000',
                'estimated_delivery' => '3-4 days',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'shipment_method' => 'JNT Regular',
                'delivery_cost' => '45000',
                'estimated_delivery' => '1-3 day',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'shipment_method' => 'GrabExpress',
                'delivery_cost' => '25000',
                'estimated_delivery' => 'Tommorow',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
