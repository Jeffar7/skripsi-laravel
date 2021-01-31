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
                'first_name' => 'Disnat',
                'last_name' => 'Manurung',
                'username' => 'disnat@gmail.com',
                'gender' => 'pria',
                'DOB' => '12/08/1998',
                'password' => 'Wapdam12345',
                'role' => 'Customer'
            ]
        ]);
    }
}
