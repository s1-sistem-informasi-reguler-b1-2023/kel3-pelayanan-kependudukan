<?php

namespace Database\Seeders;

use App\Models\Resident;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsertestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $residents = Resident::factory(4)->create();

        $residents->each(function ($resident) {
            User::factory()->create([
                'resident_id' => $resident->id,
                'username' => $resident->nik,
                'name' => $resident->nama_lengkap,
            ]);
        });

        $roles = Role::all()->pluck('name');
        $users = User::all()->all();
        foreach ($users as $key => $user) {
            $user->assignRole($roles[$key]);
            if ($roles[$key] !== 'penduduk') {
                $user->assignRole('penduduk');
            }
        }
    }
}
