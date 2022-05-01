<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new User();
        $admin->role_id = 1;
        $admin->firstname = 'Kolawole';
        $admin->lastname = 'jimoh';
        $admin->position = 'CEO';
        $admin->employee_id = 23456;
        $admin->email = 'admin@example.com';
        $admin->phone = '07062612572';
        $admin->username = 'kman';
        $admin->password = bcrypt('admin');
        $admin->save();


        $admin = new User();
        $admin->role_id = 4;
        $admin->firstname = 'Adefemi';
        $admin->lastname = 'Segun';
        $admin->position = 'HR';
        $admin->employee_id = 23456;
        $admin->email = 'employee@example.com';
        $admin->phone = '07062612572';
        $admin->username = 'kman';
        $admin->password = bcrypt('employee');
        $admin->save();

    }
}
