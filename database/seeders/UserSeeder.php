<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Noir69420',
            'password' => 'rehan123',
            'email' => 'rehan@gmail.com',
            'phonenumber' => '081212360492',
            'address' => 'Kemanggisan',
        ]);
    }
}
