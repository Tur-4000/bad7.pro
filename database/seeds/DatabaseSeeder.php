<?php

use Illuminate\Database\Seeder;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(RoleSeeder::class);
//         $this->call(PermissionSeeder::class);
//         $this->call(UserSeeder::class);

        // Ask for db migration refresh, default is no
//        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
//            // Call the php artisan migrate:refresh
//            $this->command->call('migrate:refresh');
//            $this->command->warn("Data cleared, starting from blank database.");
//        }

        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        $this->command->info('Default Permissions added.');

        if ($this->command->confirm('Create Roles for user, default is admin, sales-manager and content-manager? [y|N]', true)) {

            // Ask for roles from input
            $input_roles = $this->command->ask('Enter roles in comma separate format.', 'Developer,Admin,SalesManager,ContentManager');

            // Explode roles
            $roles_array = explode(',', $input_roles);

            // add roles
            foreach($roles_array as $role) {
                $role = Role::firstOrCreate(['name' => trim($role)]);

                if( $role->name == 'Admin' ) {
                    // assign all permissions
                    $role->syncPermissions(Permission::all());
                    $this->command->info('Admin granted all the permissions');
                } else {
                    // for others by default only read access
                    $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
                }

                // create one user for each role
//                $this->createUser($role);
            }

            $this->command->info('Roles ' . $input_roles . ' added successfully');

        } else {
            Role::firstOrCreate(['name' => 'User']);
            $this->command->info('Added only default user role.');
        }
    }


}
