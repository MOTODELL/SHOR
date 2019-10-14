<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->name = 'pendiente';
        $status->description = 'Pendiente';
        $status->save();

        $status = new Status();
        $status->name = 'pagado';
        $status->description = 'Pagado';
        $status->save();

        $status = new Status();
        $status->name = 'cancelado';
        $status->description = 'Cancelado';
        $status->save();
    }
}
