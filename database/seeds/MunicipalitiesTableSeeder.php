<?php

use App\State;
use App\Municipality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Municipality::truncate();

        $municipios = Storage::disk('local')->get('public/municipios.csv');
        $municipios = explode("\r\n", $municipios);
        if ($municipios[count($municipios) - 1] == "") {
            array_pop($municipios);
        }
        foreach ($municipios as $municipio) {
            $municipio = explode("\",\"", $municipio);
            $municipio = str_replace("\"", "", $municipio);
            $municipality = new Municipality();
            $municipality->code = $municipio[0];
            $municipality->description = $municipio[1];
            if (State::where('code', $municipio[2])->first()) {
                $municipality->state()->associate(State::where('code', $municipio[2])->first());
            } else {
                dd($municipio[0], $municipio[1], $municipio[2]);
            }
            $municipality->save();
        }
    }
}
