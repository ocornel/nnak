<?php

use Illuminate\Database\Seeder;
use NNAK\StarterPack;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(StarterPack::class);

    }
}
