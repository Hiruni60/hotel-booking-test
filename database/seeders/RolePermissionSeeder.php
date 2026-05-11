<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // CREATE ROLES


        $admin = Role::create(['name' => 'Admin']);
        $manager = Role::create(['name' => 'Manager']);
        $receptionist = Role::create(['name' => 'Receptionist']);

        //CREATE PERMISSIONS


        $permissions = [
            'manage-users',
            'assign-roles',
            'manage-rooms',
            'create-bookings',
            'cancel-bookings',
            'view-rooms',
            'view-bookings',
            'view-booking-history',
        ];

        foreach ($permissions as $perm) {
            Permission::create(['name' => $perm]);
        }

        // ASSIGN PERMISSIONS TO ROLES


        // ADMIN (full access)
        $admin->permissions()->attach(
            Permission::pluck('id')
        );

        // MANAGER
        $manager->permissions()->attach(
            Permission::whereIn('name', [
                'assign-roles',
                'manage-rooms',
                'create-bookings',
                'cancel-bookings',
                'view-rooms',
                'view-bookings',
                'view-booking-history',
            ])->pluck('id')
        );

        // RECEPTIONIST
        $receptionist->permissions()->attach(
            Permission::whereIn('name', [
                'create-bookings',
                'cancel-bookings',
                'view-rooms',
                'view-bookings',
                'view-booking-history',
            ])->pluck('id')
        );
    }
}
