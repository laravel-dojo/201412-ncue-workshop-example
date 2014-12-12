<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
        DB::table('users')->truncate();
        
        User::create([
            'username' => 'admin',
            'password' => Hash::make('1234'),
        ]);
	}

}