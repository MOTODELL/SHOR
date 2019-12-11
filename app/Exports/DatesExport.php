<?php

namespace App\Exports;

use App\Date;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DatesExport implements FromView
{
    protected $date_start;
    protected $date_end;
    protected $export_check_pendiente;
    protected $export_check_pagado;
    protected $export_check_cancelado;

    public function __construct($data)
    {
        $this->date_start = array_key_exists('date_start', $data) ? Carbon::parse($data['date_start'])->startOfDay() : false;
        $this->date_end = array_key_exists('date_end', $data) ? Carbon::parse($data['date_end'])->endOfDay() : false;
        $this->export_check_pendiente = array_key_exists('export_check_pendiente', $data) ? $data['export_check_pendiente'] : false;
        $this->export_check_pagado = array_key_exists('export_check_pagado', $data) ? $data['export_check_pagado'] : false;
        $this->export_check_cancelado = array_key_exists('export_check_cancelado', $data) ? $data['export_check_cancelado'] : false;
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        $dates = Date::whereBetween('attention_date', [$this->date_start, $this->date_end]);
        if ($this->export_check_pendiente || $this->export_check_pagado || $this->export_check_cancelado) {
            $dates->whereHas('status', function ($q)
            {
                $first = true;
                if ($this->export_check_pendiente) {
                    $q->where('name', 'pendiente');
                    $first = false;
                }
                if ($this->export_check_pagado) {
                    if ($first) {
                        $q->where('name', 'pagado');
                        $first = false;
                    } else {
                        $q->orWhere('name', 'pagado');
                    }
                }
                if ($this->export_check_cancelado) {
                    if ($first) {
                        $q->where('name', 'cancelado');
                    } else {
                        $q->orWhere('name', 'cancelado');
                    }
                }
            });
        }
        return view('dates.export', [
            'dates' => $dates->get()
        ]);
    }
}