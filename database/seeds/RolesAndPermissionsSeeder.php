<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'nova']);
        Permission::create(['name' => 'menubuilder']);
        Permission::create(['name' => 'roles']);
        Permission::create(['name' => 'permissions']);
        Permission::create(['name' => 'filemanager']);
        Permission::create(['name' => 'translations']);
        Permission::create(['name' => 'settings']);
        Permission::create(['name' => 'user']);
        Permission::create(['name' => 'templates']);
        Permission::create(['name' => 'page']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo(Permission::all());

        // or may be done by chaining
        $role = Role::create(['name' => 'Beheerder'])
            ->givePermissionTo([
                'nova',
                'filemanager',
                'translations',
                'settings',
                'user',
                'templates',
                'page',
            ]);

        $role = Role::create(['name' => 'Gebruiker']);
    }
}