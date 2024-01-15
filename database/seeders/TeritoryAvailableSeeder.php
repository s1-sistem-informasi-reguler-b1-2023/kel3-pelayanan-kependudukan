<?php

namespace Database\Seeders;

use App\Models\TerritoryAvailable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeritoryAvailableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TerritoryAvailable::create([
            'rt' => '1',
            'rw' => '1',
            'desa_id' => '34142',
            'kecamatan_id' => '34139',
            'kabupaten_id' => '34133',
            'provinsi_id' => '28004',
            'negara' => 'Indonesia',
        ]);

        TerritoryAvailable::create([
            'rt' => '2',
            'rw' => '1',
            'desa_id' => '34142',
            'kecamatan_id' => '34139',
            'kabupaten_id' => '34133',
            'provinsi_id' => '28004',
            'negara' => 'Indonesia',
        ]);
    }
}
