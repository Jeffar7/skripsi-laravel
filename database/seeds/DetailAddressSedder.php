<?php

use App\DetailAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailAddressSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailaddresses')->insert([
            [
                'city' => 'Bekasi',
                'province' => 'West Jawa',
                'zip_code' => '17144',
                'country' => 'Indonesia',
                'user_id' => 1
            ],
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'zip_code' => '11481',
                'country' => 'Indonesia',
                'user_id' => 2
            ],
            [
                'city' => 'Magelang',
                'province' => 'Central Java',
                'zip_code' => '56132',
                'country' => 'Indonesia',
                'user_id' => 3
            ],
            [
                'city' => 'Tegal',
                'province' => 'Central Java',
                'zip_code' => '52121',
                'country' => 'Indonesia',
                'user_id' => 4
            ],
            [
                'city' => 'Purwokerto',
                'province' => 'Central Java',
                'zip_code' => '53115',
                'country' => 'Indonesia',
                'user_id' => 5
            ],
            [
                'city' => 'Banda Aceh',
                'province' => 'Aceh',
                'zip_code' => '23123',
                'country' => 'Indonesia',
                'user_id' => 6
            ],
            [
                'city' => 'Longapang',
                'province' => 'Aceh',
                'zip_code' => '23367',
                'country' => 'Indonesia',
                'user_id' => 7
            ],
            [
                'city' => 'Medan',
                'province' => 'North Sumatra',
                'zip_code' => '20112',
                'country' => 'Indonesia',
                'user_id' => 8
            ],
            [
                'city' => 'Sawe',
                'province' => 'North Sumatra',
                'zip_code' => '22845',
                'country' => 'Indonesia',
                'user_id' => 9
            ],
            [
                'city' => 'Wonosari',
                'province' => 'Yogyakarta',
                'zip_code' => '55812',
                'country' => 'Indonesia',
                'user_id' => 10
            ],
            [
                'city' => 'Lakandito',
                'province' => 'Southeast Sulawesi',
                'zip_code' => '93649',
                'country' => 'Indonesia',
                'user_id' => 11
            ],
            [
                'city' => 'Balikpapan',
                'province' => 'East Kalimantan',
                'zip_code' => '76115',
                'country' => 'Indonesia',
                'user_id' => 12
            ],
            [
                'city' => 'Tenggarong',
                'province' => 'East Kalimantan',
                'zip_code' => '75513',
                'country' => 'Indonesia',
                'user_id' => 13
            ],
            [
                'city' => 'Tanjungpinang',
                'province' => 'Riau',
                'zip_code' => '29119',
                'country' => 'Indonesia',
                'user_id' => 14
            ],
            [
                'city' => 'Aru',
                'province' => 'Riau',
                'zip_code' => '28662',
                'country' => 'Indonesia',
                'user_id' => 15
            ],
            [
                'city' => 'Jayapura',
                'province' => 'Papua',
                'zip_code' => '99112',
                'country' => 'Indonesia',
                'user_id' => 16
            ],
            [
                'city' => 'Simpang',
                'province' => 'Jambi',
                'zip_code' => '36774',
                'country' => 'Indonesia',
                'user_id' => 17
            ],
            [
                'city' => 'Banjarmasin',
                'province' => 'South Kalimantan',
                'zip_code' => '70119',
                'country' => 'Indonesia',
                'user_id' => 18
            ],
            [
                'city' => 'Palu',
                'province' => 'Central Sulawesi',
                'zip_code' => '94223',
                'country' => 'Indonesia',
                'user_id' => 19
            ],
        ]);
    }
}
