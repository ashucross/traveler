<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Destination::create([
            'name' => 'Himachal',
        ]);
        Destination::create([
            'name' => 'Spiti Valley',
        ]);
        Destination::create([
            'name' => 'Ladakh',
        ]);
        Destination::create([
            'name' => 'Uttrakhand',
        ]);
        Destination::create([
            'name' => 'Rajasthan',
        ]);
        Destination::create([
            'name' => 'Kashmir',
        ]);
        Destination::create([
            'name' => 'Nilgiri',
        ]);
        Destination::create([
            'name' => 'Kerla',
        ]);
    }
}
