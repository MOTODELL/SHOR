<?php

use App\SettlementType;
use Illuminate\Database\Seeder;

use function App\Http\getDescriptionName;

class SettlementTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SettlementType::truncate();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Aeropuerto');
        $settlement_type->description = 'Aeropuerto';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Ampliación');
        $settlement_type->description = 'Ampliación';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Barrio');
        $settlement_type->description = 'Barrio';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Cantón');
        $settlement_type->description = 'Cantón';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Ciudad');
        $settlement_type->description = 'Ciudad';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Ciudad Industrial');
        $settlement_type->description = 'Ciudad Industrial';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Colonia');
        $settlement_type->description = 'Colonia';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Condominio');
        $settlement_type->description = 'Condominio';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Conjunto habitacional');
        $settlement_type->description = 'Conjunto habitacional';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Corredor industrial');
        $settlement_type->description = 'Corredor industrial';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Coto');
        $settlement_type->description = 'Coto';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Cuartel');
        $settlement_type->description = 'Cuartel';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Ejido');
        $settlement_type->description = 'Ejido';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Exhacienda');
        $settlement_type->description = 'Exhacienda';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Fracción');
        $settlement_type->description = 'Fracción';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Fraccionamiento');
        $settlement_type->description = 'Fraccionamiento';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Granja');
        $settlement_type->description = 'Granja';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Hacienda');
        $settlement_type->description = 'Hacienda';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Ingenio');
        $settlement_type->description = 'Ingenio';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Manzana');
        $settlement_type->description = 'Manzana';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Paraje');
        $settlement_type->description = 'Paraje';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Parque industrial');
        $settlement_type->description = 'Parque industrial';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Privada');
        $settlement_type->description = 'Privada';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Prolongación');
        $settlement_type->description = 'Prolongación';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Pueblo');
        $settlement_type->description = 'Pueblo';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Puerto');
        $settlement_type->description = 'Puerto';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Ranchería');
        $settlement_type->description = 'Ranchería';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Rancho');
        $settlement_type->description = 'Rancho';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Región');
        $settlement_type->description = 'Región';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Residencial');
        $settlement_type->description = 'Residencial';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Rinconada');
        $settlement_type->description = 'Rinconada';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Sección');
        $settlement_type->description = 'Sección';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Sector');
        $settlement_type->description = 'Sector';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Supermanzana');
        $settlement_type->description = 'Supermanzana';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Unidad');
        $settlement_type->description = 'Unidad';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Unidad habitacional');
        $settlement_type->description = 'Unidad habitacional';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Villa');
        $settlement_type->description = 'Villa';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Zona federal');
        $settlement_type->description = 'Zona federal';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Zona industrial');
        $settlement_type->description = 'Zona industrial';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Zona militar');
        $settlement_type->description = 'Zona militar';
        $settlement_type->save();

        $settlement_type = new SettlementType();
        $settlement_type->name = getDescriptionName('Zona naval');
        $settlement_type->description = 'Zona naval';
        $settlement_type->save();
    }
}
