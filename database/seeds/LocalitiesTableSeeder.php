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
        Locality::truncate();
        $locality = new Locality();
        $locality->code = '001';
        $locality->description = 'La pereza';
        $locality->municipality()->associate(Municipality::where('code', '001')->first());
        $locality->save();

        $locality = new Locality();
        $locality->code = '002';
        $locality->description = 'El perezoso';
        $locality->municipality()->associate(Municipality::where('code', '002')->first());
        $locality->save();

    }
}
