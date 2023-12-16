<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rwRole = Role::create(['name' => 'rw']);
        $rtRole = Role::create(['name' => 'rt']);
        $superadminRole = Role::create(['name' => 'superadmin']);
        $pendudukRole = Role::create(['name' => 'penduduk']);

        $approveDocumentPermission = Permission::create(['name' => 'approve_document']);
        $manageNewsPermission = Permission::create(['name' => 'manage_news']);
        $approveResidentsPermission = Permission::create(['name' => 'approve_residents']);
        $manageResidentsPermission = Permission::create(['name' => 'manage_residents']);

        $rtRole->givePermissionTo([$approveDocumentPermission, $manageNewsPermission, $approveResidentsPermission]);
        $rwRole->givePermissionTo([$approveDocumentPermission, $manageNewsPermission]);
        $superadminRole->givePermissionTo([$manageNewsPermission, $manageResidentsPermission]);
    }
}
