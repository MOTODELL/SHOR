<?php

use App\Role;
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
        // User::truncate();
        
        $user = new User();
        $user->name = 'Test';
        $user->paternal_lastname = 'Test';
        $user->maternal_lastname = 'Test';
        $user->username = 'test';
        $user->phone = '(999) 999-9999';
        $user->curp = 'TEST0000TESTESTES2';
        $user->email = 'test@test.com';
        $user->avatar = 'https://avatars.dicebear.com/api/initials/'.$user->name.'.svg';
        $user->password = Hash::make('12345678');
        $user->save();

        $user->roles()->attach(Role::where('name', 'admin')->first());
    }
}
