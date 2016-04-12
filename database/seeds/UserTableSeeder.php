<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
        	'name' => 'Johnny Ng',
        	'email' => 'johnnyng@example.com',
        	// password is 'pass'
        	'password' => \Hash::make('123456'),
        ]);
    }
}
