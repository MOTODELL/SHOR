<?php

use App\Dependency;
use Illuminate\Database\Seeder;

class DependenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dependency::truncate();
        $dependency = new Dependency();
        $dependency->name = 'caja';
        $dependency->description = 'Caja';
        $dependency->save();

        $dependency = new Dependency();
        $dependency->name = 'urgencias';
        $dependency->description = 'Urgencias';
        $dependency->save();
    }
}
