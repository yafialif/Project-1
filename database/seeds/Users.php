<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class Users extends Seeder
{
    public function run()
    {

        Role::Insert([
            'title' => 'Administrator'
        ]);


    User::Insert([[
        'role_id' => '1',
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => bcrypt('password'),

    ],
    [
    'role_id' => '2',
        'name' => 'User',
        'email' => 'admin@demo.com',
        'password' => bcrypt('password'),
    ]]);



  }
}
