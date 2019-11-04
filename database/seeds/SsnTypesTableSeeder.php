<?php

use App\SsnType;
use Illuminate\Database\Seeder;

use function App\Http\getDescriptionName;

class SsnTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SsnType::truncate();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('ISSSTE');
        $ssn_type->description = 'ISSSTE';
        $ssn_type->save();
        
        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('IMSS');
        $ssn_type->description = 'IMSS';
        $ssn_type->save();
        
        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('PEMEX');
        $ssn_type->description = 'PEMEX';
        $ssn_type->save();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('SEDENA');
        $ssn_type->description = 'SEDENA';
        $ssn_type->save();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('SEMAR');
        $ssn_type->description = 'SEMAR';
        $ssn_type->save();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('Gob. Estatal');
        $ssn_type->description = 'Gob. Estatal';
        $ssn_type->save();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('Seguro privado');
        $ssn_type->description = 'Seguro privado';
        $ssn_type->save();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('Seguro popular');
        $ssn_type->description = 'Seguro popular';
        $ssn_type->save();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('Se ignora');
        $ssn_type->description = 'Se ignora';
        $ssn_type->save();

        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('PROSPERA');
        $ssn_type->description = 'PROSPERA';
        $ssn_type->save();
        
        $ssn_type = new SsnType();
        $ssn_type->name = getDescriptionName('NINGUNA');
        $ssn_type->description = 'NINGUNA';
        $ssn_type->save();
    }
}
