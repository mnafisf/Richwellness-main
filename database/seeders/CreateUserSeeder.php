<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',// dd(['input_role' => $input['role'], 'db_role' => $user->role]);
                'role' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Resepsionis',
                'email' => 'resepsionis@gmail.com',
                'is_admin' => '0',
                'role' => 'receptionist',
                'password' => bcrypt('password'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
