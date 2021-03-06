<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(DependenciesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SsnTypesTableSeeder::class);
        $this->call(SettlementTypesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(VialitiesTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(LocalitiesTableSeeder::class);
        $this->call(ZipCodesTableSeeder::class);
    }
}
