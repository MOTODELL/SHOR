<?php

use App\Municipality;
use App\ZipCode;
use Illuminate\Database\Seeder;

class ZipCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ZipCode::truncate();

        $codigos_postales = Storage::disk('local')->get('public/codigos_postales.csv');
        $codigos_postales = explode("\r\n", $codigos_postales);
        if ($codigos_postales[count($codigos_postales) - 1] == "") {
            array_pop($codigos_postales);
        }
        foreach ($codigos_postales as $codigo_postal) {
            $codigo_postal = explode(",", $codigo_postal);
            $zip_code = new ZipCode();
            $zip_code->code = $codigo_postal[0];
            $municipality = Municipality::with('state')->whereHas('state', function ($q) use ($codigo_postal)
            {
                $q->where('municipalities.code', $codigo_postal[1])
                ->where('states.code', $codigo_postal[2]);
            })->first();
            
            if ($municipality) {
                $zip_code->municipality()->associate($municipality);
            } else {
                dd($codigo_postal[0], $codigo_postal[1], $codigo_postal[2]);
            }
            $zip_code->save();
        }
    }
}
