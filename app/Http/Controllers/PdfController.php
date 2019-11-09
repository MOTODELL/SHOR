<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        set_time_limit(-1);

        $pdf = \PDF::loadView('pdf.date');
        return $pdf->stream();
    }
}
