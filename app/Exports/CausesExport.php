<?php

namespace App\Exports;

use App\Cause;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CausesExport implements FromView
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        return view('causes.export', [
            'causes' => Cause::all()
        ]);
    }
}
