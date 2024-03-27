<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $token = Str::random(60);
        $password = Str::random(10);
        // creates or searches read on upsert
        User::upsert([
            [
                'name' => 'Venecia Kakusha',
                'email' => 'bytetop@gmail.com',
                'password' =>bcrypt(12345678),
                'role' => 'super_admin',
                'status' => 'active',
                'email_verification_token' => $token,
            ],
            [
                'name' => 'Venecia Kakusha',
                'email' => 'venecia@gmail.com',
                'password' => bcrypt(12345678),
                'role' => 'super_admin',
                'status' => 'active',
                'email_verification_token' => $token,
            ],
        ],
            [
                'email',
            ]
        );

    }
}
