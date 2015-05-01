<?php

//php artisan db:seed --class=UserTableSeeder
class UserTableSeeder extends Seeder {

    public function run() {
        //empty table;
        DB::table('users')->delete();
        //create admin account
        User::create(array(
            'username' => 'admin',
            'password' => Hash::make('veloDashbordPassword'),
        ));
    }
}
