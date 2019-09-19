<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Charly';
        $user->lastname = 'Ponce';
        $user->username = 'charly12';
        $user->email = 'ch.1209@hotmail.com';
        $user->password = Hash::make('charly12');
        $user->dependency_id = 1;
        $user->save();
    }
}
