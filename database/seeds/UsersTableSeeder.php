<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' =>'Administrator',
            'email' => 'admin@mopol50.dev',
            'password'=> bcrypt('123456secret'),
        ]);
    }
}
