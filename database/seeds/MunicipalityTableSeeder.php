<?php

use App\Municipality;
use App\State;
use Illuminate\Database\Seeder;

class MunicipalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipality::truncate();

        /*
        |--------------------------------------------------------------------------
        | Jalisco
        |--------------------------------------------------------------------------
        */
        
        $municipality = new Municipality();
        $municipality->code = '001';
        $municipality->description = 'Acatic';
        $municipality->state()->associate(State::where('code', 'JC')->first());
        $municipality->save();

        $municipality = new Municipality();
        $municipality->code = '002';
        $municipality->description = 'Acatlán de Juárez';
        $municipality->state()->associate(State::where('code', 'JC')->first());
        $municipality->save();

        $municipality = new Municipality();
        $municipality->code = '003';
        $municipality->description = 'Ahualulco de Mercado';
        $municipality->state()->associate(State::where('code', 'JC')->first());
        $municipality->save();

        $municipality = new Municipality();
        $municipality->code = '004';
        $municipality->description = 'Amacueca';
        $municipality->state()->associate(State::where('code', 'JC')->first());
        $municipality->save();

        $municipality = new Municipality();
        $municipality->code = '005';
        $municipality->description = 'Amatitán';
        $municipality->state()->associate(State::where('code', 'JC')->first());
        $municipality->save();
    }
}
