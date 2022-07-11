<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
                'name' => 'rifqi',
                'email' => 'rifqi@mail.com',
                'password' => bcrypt('123456'),
            ],
            ];
            foreach ($user as $key => $value) {
                User::create($value);
        }
    }
            
}