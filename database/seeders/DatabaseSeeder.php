<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(WifiSpotSeeder::class);
        // \App\Models\WifiSpot::factory(20)->create();
        $this->call(RestaurantSeeder::class);
        $this->call(HotspringSeeder::class);
        $this->call(CarSeeder::class);
    }
}
