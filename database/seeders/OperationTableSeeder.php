<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Operation;
class OperationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = Role::where('name', 'Admin')->first();
        $role_super_admin = Role::where('name', 'Super Admin')->first();
        $role_employee = Role::where('name', 'Employee')->first();


        $read = new Operation();
        $read->operation = 'read';
        $read->save();
        $read->roles()->attach($role_employee);

        $write = new Operation();
        $write->operation = 'write';
        $write->save();
        $write->roles()->attach($role_admin);

        $delete = new Operation();
        $delete->operation = 'delete';
        $delete->save();
        $delete->roles()->attach($role_super_admin);

    }
}
