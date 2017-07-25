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
        	'name' => 'admin',
        	'avatar'	=> asset('avatars/avatar.png'),
        	'admin' => 1,
        	'email'	=> 'admin@udemy.dev',
        	'password'	=> bcrypt('admin')
        ]);
    }
}
