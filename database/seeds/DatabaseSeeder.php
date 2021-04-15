<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DetailAddressSedder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoryProductSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(CategoryRaffleTableSeeder::class);
        $this->call(RaffleTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ShipmentsTableSeeder::class);
    }
}
