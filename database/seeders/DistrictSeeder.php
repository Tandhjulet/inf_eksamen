<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        District::create([
            'name' => 'Københavns Storkreds',
        ]);

        District::create([
            'name' => 'Københavns Omegns Storkreds',
        ]);

        District::create([
            'name' => 'Nordsjællands Storkreds',
        ]);

        District::create([
            'name' => 'Bornholms Storkreds',
        ]);

        District::create([
            'name' => 'Sjællands Storkreds',
        ]);

        District::create([
            'name' => 'Fyns Storkreds',
        ]);

        District::create([
            'name' => 'Sydjyllands Storkreds',
        ]);

        District::create([
            'name' => 'Østjyllands Storkreds',
        ]);

        District::create([
            'name' => 'Vestjyllands Storkreds',
        ]);

        District::create([
            'name' => 'Nordjyllands Storkreds',
        ]);
    }
}
