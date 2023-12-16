<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resident>
 */
class ResidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_kk' => fake()->numberBetween(9000000000, 9999999999),
            'nik' => fake()->numberBetween(8000000000, 8999999999),
            'nama_lengkap' => fake()->name(),
            'jenis_kelamin' => 'LAKI_LAKI',
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => '2000-01-01',
            'agama' => 'Kepercayaan',
            'pekerjaan' => 'Wiraswasta',
            'status_perkawinan' => 'BELUM_MENIKAH',
            'alamat' => 'Jl. Surapati',
            'rt' => '1',
            'rw' => '1',
            'desa_id' => 34142,
            'kecamatan_id' => 34139,
            'kabupaten_id' => 34133,
            'provinsi_id' => 28004,
            'negara' => 'Indonesia',
            'created_by' => '0',
        ];
    }
}
