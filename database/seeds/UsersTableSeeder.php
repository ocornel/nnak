<?php

use Illuminate\Database\Seeder;
use NNAK\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Martin Cornel',
            'email' => 'mrtncornel@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Nelson Kavelenge',
            'email' => 'oanelmanat@gmail.com',
            'password' => bcrypt('NnakPB!01'),
        ]);
    }
}
