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
        $admin = User::create(
            [
                'first_name' => 'Aisyah',
                'last_name' => 'Kumara',
                'email' => 'AisyahKumara@outlook.com',
                'username' => 'AisyahKumara',
                'gender' => 'Female',
                'DOB' => '1991-08-13',
                'password' => bcrypt("itsTim20ne"),
                'role' => 'admin',
                'address' => 'Masjid al Fatimah, Jalan Menado, Sumur Bandung',
                'site' => 'www.aisyahkumara.com',
                'about' => '',
                'picture' => 'Aisyah_Kumara.jpg',
                //'public\images\Users\Aisyah_Kumara.jpg  Aisyah_Kumara.jpg',
                'phone' => '081499604123'
            ]
        );
        $admin->assignRole('admin');

        $customer = User::create(
            [
                'first_name' => 'Amy',
                'last_name' => 'Jones',
                'email' => 'AmyJones@gmail.com',
                'username' => 'AmyJones',
                'gender' => 'Female',
                'DOB' => '1989-06-21',
                'password' => bcrypt("Alpenliebe81"),
                'role' => 'customer',
                'address' => 'Tunas Patriot Tarumanegara, Jalan Ahmad Yani',
                'site' => 'www.AmyJones.com',
                'about' => '',
                'picture' => 'Amy_Jones.jpg',
                'phone' => '085530125921'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Bruce',
                'last_name' => 'Wayne',
                'email' => 'BruceWayne@yahoo.com',
                'username' => 'BruceWayne',
                'gender' => 'Male',
                'DOB' => '1989-09-28',
                'password' => bcrypt("arkhamCity10"),
                'role' => 'customer',
                'address' => 'UD Loma, Jalan Ahmad Yani, Magelang Tengah',
                'site' => 'www.BruceWayne.com',
                'about' => '',
                'picture' => 'Bruce_Wayne.jpg',
                'phone' => '085410976632'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Daniel',
                'last_name' => 'James',
                'email' => 'DanielJames@hotmail.com',
                'username' => 'DanielJames',
                'gender' => 'Male',
                'DOB' => '1980-01-10',
                'password' => bcrypt("ManchesterUtd9"),
                'role' => 'customer',
                'address' => 'Garut Putra, Jalan Cokroaminoto, Tegal Timur',
                'site' => 'www.DanielJames.com',
                'about' => '',
                'picture' => 'Daniel_James.jpg',
                'phone' => '085159311102'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Eugene',
                'last_name' => 'Lee',
                'email' => 'EugeneLee@msn.com',
                'username' => 'EugeneLee',
                'gender' => 'Male',
                'DOB' => '1992-02-14',
                'password' => bcrypt("SuperPacific2"),
                'role' => 'customer',
                'address' => ' Toko Alam Jaya, Jalan Gatot Subroto, Purwokerto Timur',
                'site' => 'www.EugeneLee.com',
                'about' => '',
                'picture' => 'Eugene_Lee.jpg',
                'phone' => '085133851041'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Gary',
                'last_name' => 'Donovan',
                'email' => 'GaryDonovan@live.com',
                'username' => 'GaryDonovan',
                'gender' => 'Male',
                'DOB' => '1970-03-26',
                'password' => bcrypt("MarchingTothe8"),
                'role' => 'customer',
                'address' => 'Plaza It, Jalan Pocut Baren, Kuta Alam',
                'site' => 'www.GaryDonovan.com',
                'about' => '',
                'picture' => 'Gary_Donovan.jpg',
                'phone' => '089951023123'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'James',
                'last_name' => 'King',
                'email' => 'JamesKing@live.com',
                'username' => 'JamesKing',
                'gender' => 'Male',
                'DOB' => '1987-04-01',
                'password' => bcrypt("KilltheVibe6"),
                'role' => 'customer',
                'address' => 'Perumahan Bumi Permata Lamnyong, Jalan Makam Teungku Nyak Arief, Krueng Barona Jaya',
                'site' => 'www.JamesKing.com',
                'about' => '',
                'picture' => 'James_King.jpg',
                'phone' => '085571201492'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'John',
                'last_name' => 'Williams',
                'email' => 'JohnWilliams@yahoo.com',
                'username' => 'JohnWilliams',
                'gender' => 'Male',
                'DOB' => '1989-05-07',
                'password' => bcrypt("Vibranium88"),
                'role' => 'customer',
                'address' => 'Toko Jaya, Jalan Gajah Mada, Medan Petisah',
                'site' => 'www.JohnWilliams.com',
                'about' => '',
                'picture' => 'John_Williams.jpg',
                'phone' => '085194102572'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Julie',
                'last_name' => 'Taylor',
                'email' => 'JulieTaylor@gmail.com',
                'username' => 'JulieTaylor',
                'gender' => 'Female',
                'DOB' => '1991-10-09',
                'password' => bcrypt("Ghostbusted4"),
                'role' => 'customer',
                'address' => 'SMP Negeri 1 Sawo, Jalan Gunungsitoli-Lahewa, Sawo, Sumatera Utara',
                'site' => 'www.JulieTaylor.com',
                'about' => '',
                'picture' => 'Julie_Taylor.jpg',
                'phone' => '082149522212'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Kathleen',
                'last_name' => 'Byrne',
                'email' => 'KathleenByrne@hotmail.com',
                'username' => 'KathleenByrne',
                'gender' => 'Female',
                'DOB' => '1979-10-30',
                'password' => bcrypt("easyMoneySniper30"),
                'role' => 'customer',
                'address' => 'Cantika Kirana, Jalan Tanjung, Wonosari, Daerah Istimewa Yogyakarta',
                'site' => 'www.KathleenByrne.com',
                'about' => '',
                'picture' => 'Kathleen_Byrne.jpg',
                'phone' => '084141861023'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Kun',
                'last_name' => 'Obladi',
                'email' => 'KunObladi@rocketmail.com',
                'username' => 'KunObladi',
                'gender' => 'Male',
                'DOB' => '1985-12-31',
                'password' => bcrypt("noDoubt4Me"),
                'role' => 'customer',
                'address' => 'SMP Negeri 1 Kontukowuna, Kontukowuna',
                'site' => 'www.KunObladi.com',
                'about' => '',
                'picture' => 'Kun_Obladi.jpg',
                'phone' => '084190091843'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Lisa',
                'last_name' => 'Wong',
                'email' => 'LisaWong@yahoo.com',
                'username' => 'LisaWong',
                'gender' => 'Female',
                'DOB' => '1985-07-14',
                'password' => bcrypt("TheyCalledMeWulan8"),
                'role' => 'customer',
                'address' => 'Nirwana Jaya, Jalan Jenderal Sudirman, Balikpapan Selatan',
                'site' => 'www.LisaWong.com',
                'about' => '',
                'picture' => 'Lisa_Wong.jpg',
                'phone' => '085141921235'
            ]
        );
        $customer->assignRole('customer');

        $admin = User::create(
            [
                'first_name' => 'Paul',
                'last_name' => 'Huntington',
                'email' => 'PaulHuntington@outlook.com',
                'username' => 'PaulHuntington',
                'gender' => 'Male',
                'DOB' => '1969-07-18',
                'password' => bcrypt("TransformerMyName1"),
                'role' => 'admin',
                'address' => 'Dinny Seppraudiva, Jalan Slendreng',
                'site' => 'www.PaulHuntington.com',
                'about' => '',
                'picture' => 'Paul_Huntington.jpg',
                'phone' => '085141921235'
            ]
        );
        $admin->assignRole('admin');

        $customer = User::create(
            [
                'first_name' => 'Paul',
                'last_name' => 'Jones',
                'email' => 'PaulJones@gmail.com',
                'username' => 'PaulJones',
                'gender' => 'Male',
                'DOB' => '1996-01-24',
                'password' => bcrypt("ChrisPaulisCool9"),
                'role' => 'customer',
                'address' => 'Naturqua, Jalan Dr. Sutomo, Tanjungpinang Barat',
                'site' => 'www.PaulJones.com',
                'about' => '',
                'picture' => 'Paul_Jones.jpg',
                'phone' => '084141293041'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Paula',
                'last_name' => 'Gates',
                'email' => 'PaulaGates@gmail.com',
                'username' => 'PaulaGates',
                'gender' => 'Female',
                'DOB' => '1988-01-30',
                'password' => bcrypt("captainAmericaRight10"),
                'role' => 'customer',
                'address' => 'SMP Negeri 1 Satu Atap Sungai Apit, Sungai Apit',
                'site' => 'www.PaulaGates.com',
                'about' => '',
                'picture' => 'Paula_Gates.jpg',
                'phone' => '085329620353'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Ray',
                'last_name' => 'Moore',
                'email' => 'RayMoore@hotmail.com',
                'username' => 'RayMoore',
                'gender' => 'Male',
                'DOB' => '1978-04-20',
                'password' => bcrypt("captainAmericaRight10"),
                'role' => 'customer',
                'address' => 'Gor Cendrawasih, Jalan Sam Ratulangi, Jayapura Utara',
                'site' => 'www.RayMoore.com',
                'about' => '',
                'picture' => 'Ray_Moore.jpg',
                'phone' => '085141992102'
            ]
        );
        $customer->assignRole('customer');

        $admin = User::create(
            [
                'first_name' => 'Steven',
                'last_name' => 'Wells',
                'email' => 'StevenWells@rocketmail.com',
                'username' => 'StevenWells',
                'gender' => 'Male',
                'DOB' => '1950-03-04',
                'password' => bcrypt("ImOldEnough70"),
                'role' => 'admin',
                'address' => 'Pkbm Koco Purnomo, Berbak',
                'site' => 'www.StevenWells.com',
                'about' => '',
                'picture' => 'Steven_Wells.jpg',
                'phone' => '084142951012'
            ]
        );
        $admin->assignRole('admin');

        $customer = User::create(
            [
                'first_name' => 'Thierry',
                'last_name' => 'Henry',
                'email' => 'ThierryHenry@gmail.com',
                'username' => 'ThierryHenry',
                'gender' => 'Male',
                'DOB' => '1998-08-17',
                'password' => bcrypt("ArsenalIsGood7"),
                'role' => 'customer',
                'address' => 'Toko Arif Saman, Jalan Teuku Tiram, Banjarmasin Barat',
                'site' => 'www.ThierryHenry.com',
                'about' => '',
                'picture' => 'Thierry_Henry.jpg',
                'phone' => '086619031213'
            ]
        );
        $customer->assignRole('customer');

        $customer = User::create(
            [
                'first_name' => 'Will',
                'last_name' => 'Smith',
                'email' => 'WillSmith@hotmail.com',
                'username' => 'WillSmith',
                'gender' => 'Male',
                'DOB' => '1982-11-29',
                'password' => bcrypt("TooGoodForMe42"),
                'role' => 'customer',
                'address' => 'Sakura Gorden, Jalan Sis al Jufri, Palu Barat',
                'site' => 'www.WillSmith.com',
                'about' => '',
                'picture' => 'Will_Smith.jpg',
                'phone' => '085129102290'
            ]
        );
        $customer->assignRole('customer');
    }
}
