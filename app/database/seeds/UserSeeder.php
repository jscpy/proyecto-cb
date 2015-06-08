<?php
class UserSeeder extends Seeder {

	public function run(){
        User::create(array(
            'username'  => 'admin',
            'password' => Hash::make('basicas')
        ));
    }
}
