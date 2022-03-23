<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DestinationSeeder;
use Database\Seeders\PackageSeeder;
use Database\Seeders\UserSeeder;

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
        $this->call([
            UserSeeder::class,
            DestinationSeeder::class,
            PackageSeeder::class,
        ]);
    }
}
