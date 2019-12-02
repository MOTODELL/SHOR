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
        User::truncate();
        
        $user = new User();
        $user->name = 'Charly';
        $user->paternal_lastname = 'Ponce';
        $user->maternal_lastname = 'Ibarra';
        $user->username = 'charly12';
        $user->phone = '(999) 999-9999';
        $user->curp = 'CHLY120997HMNREMR2';
        $user->email = 'ch.1209@hotmail.com';
        $user->avatar = 'https://api.adorable.io/avatars/285/'.$user->name;
        $user->password = Hash::make('charly12');
        // $user->dependency_id = 1;
        // $user->key = Hash::make('Charly' . 'Ponce' . 'charly12' . 'ch.1209@hotmail.com');
        $user->save();

        $user->roles()->attach(Role::where('name', 'admin')->first());

        $user = new User();
        $user->name = 'Angeles';
        $user->paternal_lastname = 'Martinez';
        $user->maternal_lastname = 'Vargas';
        $user->username = 'ang';
        $user->phone = '(999) 999-9999';
        $user->curp = 'MAVA000804MMNRRNA9';
        $user->email = 'angelesmava0@gamil.com';
        $user->avatar = 'https://api.adorable.io/avatars/285/'.$user->name;
        $user->password = Hash::make('123');
        // $user->dependency_id = 1;
        // $user->key = Hash::make('Angeles' . 'Martinez' . 'ang' . 'angelesmava0@gmail.com');
        $user->save();

        $user->roles()->attach(Role::where('name', 'admin')->first());
    }
}
