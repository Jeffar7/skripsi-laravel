<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Disnat Jeffar',
                'last_name' => 'Manurung',
                'email' => 'disnat@gmail.com',
                'username' => 'disnat',
                'gender' => 'Male',
                'DOB' => '1998-08-12',
                'password' => bcrypt("test123"),
                'role' => 'Admin',
                'address' => 'Jalan Keluarga',
                'site' => 'www.disnat.com',
                'about' => 'lorem ipsum',
                'picture' => 'picture.jpg',
                'phone' => '082186135540'

            ],
            [
                'first_name' => 'Claudia',
                'last_name' => 'Anita Magdalena',
                'email' => 'claudia@gmail.com',
                'username' => 'claudia',
                'gender' => 'Female',
                'DOB' => '1998-08-12',
                'password' => bcrypt("test123"),
                'role' => 'Customer',
                'address' => 'Jalan Bersama',
                'site' => 'www.claudia.com',
                'about' => 'lorem ipsum',
                'picture' => 'picture.jpg',
                'phone' => '082186135541'
            ],
            [
                'first_name' => 'Ihsan Adi',
                'last_name' => 'Pratama',
                'email' => 'Ihsan@gmail.com',
                'username' => 'ihsan',
                'gender' => 'Male',
                'DOB' => '1998-08-12',
                'password' => bcrypt("test123"),
                'role' => 'Customer',
                'address' => 'Jalan Bareng',
                'site' => 'www.ihsan.com',
                'about' => 'lorem ipsum',
                'picture' => 'picture.jpg',
                'phone' => '082186135542'
            ]

        ]);
    }
}
