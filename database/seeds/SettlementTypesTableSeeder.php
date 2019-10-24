<?php

use App\State;
use App\SettlementType;
use Illuminate\Database\Seeder;

class SettlementTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettlementType::truncate();
        $settlementType = new SettlementType();
        $settlementType->name = 'urbano';
        $settlementType->description = 'Urbano';
        $settlementType->state()->associate(State::where('code', 'JC')->first());
        $settlementType->save();

        $settlementType = new SettlementType();
        $settlementType->name = 'rural';
        $settlementType->description = 'Rural';
        $settlementType->state()->associate(State::where('code', 'JC')->first());
        $settlementType->save();

    }
}
