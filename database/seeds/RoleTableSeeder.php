<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $role = new Role();
        $role->name = 'user';
        $role->description = 'Usuario';
        $role->save();

        $role = new Role();
        $role->name = 'analist';
        $role->description = 'Analista';
        $role->save();

        $role = new Role();
        $role->name = 'doctor';
        $role->description = 'Doctor';
        $role->save();

        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrador';
        $role->save();
    }
}
