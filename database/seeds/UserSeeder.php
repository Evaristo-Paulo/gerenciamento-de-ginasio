<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Evaristo Paulo',
            'email' => 'root@gmail.com',
            'password' => Hash::make('root')
        ]);

        User::create([
            'name' => 'Etelvina Catenda',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user')
        ]);
    }
}
