<?php

use App\Locality;
use App\Municipality;
use Illuminate\Database\Seeder;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Locality::truncate();
        $locality = new Locality();
        $locality->code = '001';
        $locality->description = 'Ixtapa';
        $locality->municipality()->associate(Municipality::where('id', '603')->first());
        $locality->save();

        $locality = new Locality();
        $locality->code = '002';
        $locality->description = 'Coapinole';
        $locality->municipality()->associate(Municipality::where('id', '603')->first());
        $locality->save();

    }
}
