<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Election;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Election::create([
            'name' => 'FV26',
            'active' => true,
        ]);

        $this->call([
            DistrictSeeder::class,
            PartySeeder::class,
        ]);

        $district = District::where('name', 'Østjyllands Storkreds')->sole();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'district_id' => $district,
        ]);
    }
}
