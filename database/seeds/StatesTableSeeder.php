<?php

use App\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();
        
        $state = new State();
        $state->code = 'AGU';
        $state->description = 'Aguascalientes';
        $state->save();

        $state = new State();
        $state->code = 'BCN';
        $state->description = 'Baja California';
        $state->save();

        $state = new State();
        $state->code = 'BCS';
        $state->description = 'Baja California Sur';
        $state->save();

        $state = new State();
        $state->code = 'CAM';
        $state->description = 'Campeche';
        $state->save();

        $state = new State();
        $state->code = 'CHP';
        $state->description = 'Chiapas';
        $state->save();

        $state = new State();
        $state->code = 'CHH';
        $state->description = 'Chihuahua';
        $state->save();

        $state = new State();
        $state->code = 'CMX';
        $state->description = 'Ciudad de México';
        $state->save();

        $state = new State();
        $state->code = 'COA';
        $state->description = 'Coahuila';
        $state->save();

        $state = new State();
        $state->code = 'COL';
        $state->description = 'Colima';
        $state->save();

        $state = new State();
        $state->code = 'DUR';
        $state->description = 'Durango';
        $state->save();

        $state = new State();
        $state->code = 'GUA';
        $state->description = 'Guanajuato';
        $state->save();

        $state = new State();
        $state->code = 'GRO';
        $state->description = 'Guerrero';
        $state->save();

        $state = new State();
        $state->code = 'HID';
        $state->description = 'Hidalgo';
        $state->save();

        $state = new State();
        $state->code = 'JAL';
        $state->description = 'Jalisco';
        $state->save();

        $state = new State();
        $state->code = 'MEX';
        $state->description = 'Estado de México';
        $state->save();

        $state = new State();
        $state->code = 'MIC';
        $state->description = 'Michoacán';
        $state->save();

        $state = new State();
        $state->code = 'MOR';
        $state->description = 'Morelos';
        $state->save();

        $state = new State();
        $state->code = 'NAY';
        $state->description = 'Nayarit';
        $state->save();

        $state = new State();
        $state->code = 'NLE';
        $state->description = 'Nuevo León';
        $state->save();

        $state = new State();
        $state->code = 'OAX';
        $state->description = 'Oaxaca';
        $state->save();

        $state = new State();
        $state->code = 'PUE';
        $state->description = 'Puebla';
        $state->save();

        $state = new State();
        $state->code = 'QUE';
        $state->description = 'Querétaro';
        $state->save();

        $state = new State();
        $state->code = 'ROO';
        $state->description = 'Quintana Roo';
        $state->save();

        $state = new State();
        $state->code = 'SLP';
        $state->description = 'San Luis Potosí';
        $state->save();

        $state = new State();
        $state->code = 'SIN';
        $state->description = 'Sinaloa';
        $state->save();

        $state = new State();
        $state->code = 'SON';
        $state->description = 'Sonora';
        $state->save();

        $state = new State();
        $state->code = 'TAB';
        $state->description = 'Tabasco';
        $state->save();

        $state = new State();
        $state->code = 'TAM';
        $state->description = 'Tamaulipas';
        $state->save();

        $state = new State();
        $state->code = 'TLA';
        $state->description = 'Tlaxcala';
        $state->save();

        $state = new State();
        $state->code = 'VER';
        $state->description = 'Veracruz';
        $state->save();

        $state = new State();
        $state->code = 'YUC';
        $state->description = 'Yucatán';
        $state->save();

        $state = new State();
        $state->code = 'ZAC';
        $state->description = 'Zacatecas';
        $state->save();
    }
}
