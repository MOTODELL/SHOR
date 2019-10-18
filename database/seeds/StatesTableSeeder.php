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
        $state->code = 'AS';
        $state->description = 'Aguascalientes';
        $state->save();

        $state = new State();
        $state->code = 'BC';
        $state->description = 'Baja California';
        $state->save();

        $state = new State();
        $state->code = 'BS';
        $state->description = 'Baja California Sur';
        $state->save();

        $state = new State();
        $state->code = 'CC';
        $state->description = 'Campeche';
        $state->save();

        $state = new State();
        $state->code = 'CS';
        $state->description = 'Chiapas';
        $state->save();

        $state = new State();
        $state->code = 'CH';
        $state->description = 'Chihuahua';
        $state->save();

        $state = new State();
        $state->code = 'DF';
        $state->description = 'Ciudad de México';
        $state->save();

        $state = new State();
        $state->code = 'CL';
        $state->description = 'Coahuila';
        $state->save();

        $state = new State();
        $state->code = 'CM';
        $state->description = 'Colima';
        $state->save();

        $state = new State();
        $state->code = 'DG';
        $state->description = 'Durango';
        $state->save();

        $state = new State();
        $state->code = 'GT';
        $state->description = 'Guanajuato';
        $state->save();

        $state = new State();
        $state->code = 'GR';
        $state->description = 'Guerrero';
        $state->save();

        $state = new State();
        $state->code = 'HG';
        $state->description = 'Hidalgo';
        $state->save();

        $state = new State();
        $state->code = 'JC';
        $state->description = 'Jalisco';
        $state->save();

        $state = new State();
        $state->code = 'MC';
        $state->description = 'Estado de México';
        $state->save();

        $state = new State();
        $state->code = 'MN';
        $state->description = 'Michoacán';
        $state->save();

        $state = new State();
        $state->code = 'MS';
        $state->description = 'Morelos';
        $state->save();

        $state = new State();
        $state->code = 'NT';
        $state->description = 'Nayarit';
        $state->save();

        $state = new State();
        $state->code = 'NL';
        $state->description = 'Nuevo León';
        $state->save();

        $state = new State();
        $state->code = 'OC';
        $state->description = 'Oaxaca';
        $state->save();

        $state = new State();
        $state->code = 'PL';
        $state->description = 'Puebla';
        $state->save();

        $state = new State();
        $state->code = 'QO';
        $state->description = 'Querétaro';
        $state->save();

        $state = new State();
        $state->code = 'QR';
        $state->description = 'Quintana Roo';
        $state->save();

        $state = new State();
        $state->code = 'SP';
        $state->description = 'San Luis Potosí';
        $state->save();

        $state = new State();
        $state->code = 'SL';
        $state->description = 'Sinaloa';
        $state->save();

        $state = new State();
        $state->code = 'SR';
        $state->description = 'Sonora';
        $state->save();

        $state = new State();
        $state->code = 'TC';
        $state->description = 'Tabasco';
        $state->save();

        $state = new State();
        $state->code = 'TS';
        $state->description = 'Tamaulipas';
        $state->save();

        $state = new State();
        $state->code = 'TL';
        $state->description = 'Tlaxcala';
        $state->save();

        $state = new State();
        $state->code = 'VZ';
        $state->description = 'Veracruz';
        $state->save();

        $state = new State();
        $state->code = 'YN';
        $state->description = 'Yucatán';
        $state->save();

        $state = new State();
        $state->code = 'ZS';
        $state->description = 'Zacatecas';
        $state->save();
    }
}
