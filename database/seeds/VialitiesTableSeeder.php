<?php

use App\Viality;
use Illuminate\Database\Seeder;

use function App\Http\getDescriptionName;

class VialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Viality::truncate();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Ampliación');
        $viality->description = 'Ampliación';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Andador');
        $viality->description = 'Andador';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Avenida');
        $viality->description = 'Avenida';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Boulevard');
        $viality->description = 'Boulevard';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Calle');
        $viality->description = 'Calle';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Callejón');
        $viality->description = 'Callejón';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Calzada');
        $viality->description = 'Calzada';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Cerrada');
        $viality->description = 'Cerrada';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Circuito');
        $viality->description = 'Circuito';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Circunvalación');
        $viality->description = 'Circunvalación';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Continuación');
        $viality->description = 'Continuación';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Corredor');
        $viality->description = 'Corredor';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Diagonal');
        $viality->description = 'Diagonal';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Eje vial');
        $viality->description = 'Eje vial';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Pasaje');
        $viality->description = 'Pasaje';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Peatonal');
        $viality->description = 'Peatonal';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Periférico');
        $viality->description = 'Periférico';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Privada');
        $viality->description = 'Privada';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Prolongación');
        $viality->description = 'Prolongación';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Retorno');
        $viality->description = 'Retorno';
        $viality->save();
        
        $viality = new Viality();
        $viality->name = getDescriptionName('Viaducto');
        $viality->description = 'Viaducto';
        $viality->save();
    }
}
