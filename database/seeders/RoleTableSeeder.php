<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A normal admin';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'Super Admin';
        $role_admin->description = 'A super admin';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'Hr Admin';
        $role_admin->description = 'A Hr admin';
        $role_admin->save();

        $role_author = new Role();
        $role_author->name = 'Employee';
        $role_author->description = 'Normal employee';
        $role_author->save();

    }
}
