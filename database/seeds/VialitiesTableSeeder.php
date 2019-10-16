<?php

use App\Viality;
use Illuminate\Database\Seeder;

class VialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Viality::truncate();
        $viality = new Viality();
        $viality->name = 'av';
        $viality->description = 'Avenida';
        $viality = new Viality();
        $viality->name = 'calle';
        $viality->description = 'Calle';
        $viality = new Viality();
        $viality->name = 'calle';
        $viality->description = 'Calle privada';
    }
}
