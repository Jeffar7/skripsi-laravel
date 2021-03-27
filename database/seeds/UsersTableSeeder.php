<?php

use App\DetailAddress;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Match_;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@test.com',
            'username' => 'admin',
            'gender' => 'Male',
            'DOB' => '1998-08-12',
            'password' => bcrypt("test123"),
            'role' => 'admin',
            'address' => 'Jalan Keluarga',
            'site' => 'www.admin.com',
            'about' => 'lorem ipsum',
            'picture' => 'picture.jpg',
            'phone' => '082186135540'
        ]);


        $admin->assignRole('admin');



        $customer = User::create([
            'first_name' => 'customer',
            'last_name' => 'customer1',
            'email' => 'customer1@test.com',    
            'username' => 'customer1',
            'gender' => 'Male',
            'DOB' => '1998-08-12',
            'password' => bcrypt("test123"),
            'role' => 'customer',
            'address' => 'Jalan Keluarga',
            'site' => 'www.customer1.com',
            'about' => 'lorem ipsum',
            'picture' => 'picture.jpg',
            'phone' => '082186135540'
        ]);
        $customer->assignRole('customer');
    }
}
