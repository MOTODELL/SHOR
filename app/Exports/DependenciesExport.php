<?php

namespace App\Exports;

use App\Dependency;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DependenciesExport implements FromView
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        return view('dependencies.export', [
            'dependencies' => Dependency::all()
        ]);
    }
}
