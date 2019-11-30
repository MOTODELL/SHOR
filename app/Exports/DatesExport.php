<?php

namespace App\Exports;

use App\Date;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DatesExport implements FromView
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        return view('dates.export', [
            'dates' => Date::all()
        ]);
    }
}