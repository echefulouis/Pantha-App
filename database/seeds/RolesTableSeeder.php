<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => "admin"]);
        Role::create(['name' => "company"]);
        Role::create(['name' => "user"]);

        User::create([
            'name' => 'Admin Admin',
            'phone' => '01234006789',
            'role_id' => 1,
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
