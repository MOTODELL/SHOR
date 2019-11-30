<?php

namespace App\Exports;

use App\Patient;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PatientsExport implements FromView
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        return view('patients.export', [
            'patients' => Patient::all()->sortBy('paternal_lastname')
        ]);
    }
}
