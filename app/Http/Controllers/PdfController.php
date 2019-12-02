<?php

namespace App\Http\Controllers;

use App\Date;
use App\Http\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf.date');
    }

    public function print(Request $request, string $date)
    {
        $date = Date::where('uuid', $date)->first();

        /**
         * PDF Values
         */
        $folio = str_pad($date->id, 8, '0', STR_PAD_LEFT);
        $patient = $date->patient;
        $nombre = strtoupper($patient->name);
        $primer_apellido = strtoupper($patient->paternal_lastname);
        $segundo_apellido = strtoupper($patient->maternal_lastname);
        $curp = $patient->curp;
        $fecha_nacimiento = Carbon::parse($patient->birthdate)->format('dmY');
        $entidad_nacimiento = strtoupper(preg_split('#\s+#', $patient->birthplace->description, 2)[0]);
        $edad = Carbon::parse($patient->birthdate)->age;
        $sexo_h = '';
        $sexo_m = '';
        if ($patient->sex == 'H' || $patient->sex == 'h') {
            $sexo_h = 'X';
        } else {
            $sexo_m = 'X';
        }
        // Servicios de salud
        $ssn = $patient->ssn;
        $imss = '';
        $issste = '';
        $pemex = '';
        $sedena = '';
        $semar = '';
        $gob_estatal = '';
        $seguro_privado = '';
        $seguro_popular = '';
        $se_ignora = '';
        $otro = '';
        $prospera = '';
        $ninguna = '';
        switch ($ssn->ssn_type->name) {
            case 'imss':
                $imss = 'X';
                break;
            case 'issste':
                $issste = 'X';
                break;
            case 'pemex':
                $pemex = 'X';
                break;
            case 'sedena':
                $sedena = 'X';
                break;
            case 'semar':
                $semar = 'X';
                break;
            case 'gob_estatal':
                $gob_estatal = 'X';
                break;
            case 'seguro_privado':
                $seguro_privado = 'X';
                break;
            case 'seguro_popular':
                $seguro_popular = 'X';
                break;
            case 'se_ignora':
                $se_ignora = 'X';
                break;
            case 'otro':
                $otro = 'X';
                break;
            case 'prospera':
                $prospera = 'X';
                break;
            case 'ninguna':
                $ninguna = 'X';
                break;
        }

        $num_afiliacion = $ssn->ssn;
        $num_familiar = $ssn->number;

        $gratuidad_si = '';
        $gratuidad_no = '';

        $addess = $patient->address;
        $tipo_vialidad = strtoupper($addess->viality->description);
        $nombre_vialidad = strtoupper($addess->street);
        $num_ext = $addess->number_ext;
        $num_int = $addess->number_int;

        $tipo_asentamiento = strtoupper($addess->settlement_type->description);
        $nombre_asentamiento = strtoupper($addess->colony);

        $codigo_postal = $addess->zip_code;
        $localidad = strtoupper($addess->locality->description);
        $localidad_codigo = str_pad($addess->locality->code, 4, '0', STR_PAD_LEFT);
        $municipio = strtoupper($addess->municipality->description);
        $municipio_codigo = $addess->municipality->code;

        $entidad_federativa = strtoupper($addess->state->description);
        $entidad_federativa_codigo = $addess->state->code;;
        $telefono = $patient->phone;

        $pdf = new PDF();
        $pdf->setSourceFile(storage_path('app/public/TRIAGE.pdf'));
        $page= $pdf->importPage(1);
        $pdf->addPage();
        $pdf->useTemplate($page);
        $pdf->SetFont('Arial',null, 7);
        /**
         * Parametros del Cell
         * http://www.fpdf.org/es/doc/cell.htm
         */

        // GLOBAL VARIABLES
        $char_width = 2.89;
        $char_height = 2.4;
        $page_width = 185;

        /*
        |--------------------------------------------------------------------------
        | ROW 1
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 6.9, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(20.5, $char_height, '', 0, 0, 'C'); //Margin left
        // EDO
        $pdf->Cell($char_width, $char_height, 'J', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, '', 0, 0, 'C');
        // INSTITUCION
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell(3.4, $char_height, '', 0, 0, 'C');
        // CONSECUTIVO
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, 'C', 0, 0, 'C');
        $pdf->Cell(2.8, $char_height, '', 0, 0, 'C');
        // VER
        $pdf->Cell($char_width, 2.6, 'C', 0, 0, 'C');
        $pdf->Cell(97.3, $char_height, '', 0, 0, 'C');
        // FOLIO
        $char_height_folio = 2.9;
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 2, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 3, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 4, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 5, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 6, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height_folio, substr($folio, 7, 1), 0, 0, 'C');
        $pdf->Cell(0, $char_height_folio, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 2
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 9.6, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(28, $char_height, '', 0, 0, 'C'); //Margin left
        // NOMBRE
        $pdf->Cell(57, $char_height, $nombre, 0, 0, 'C');
        $pdf->Cell(31, $char_height, $primer_apellido, 0, 0, 'C');
        $pdf->Cell(52, $char_height, $segundo_apellido, 0, 0, 'C');
        $pdf->Cell(0, $char_height, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 2
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 4.5, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(21.2, $char_height, '', 0, 0, 'C'); //Margin left
        // CURP
        $pdf->Cell($char_width, $char_height, substr($curp, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 2, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 3, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 4, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 5, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 6, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 7, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 8, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 9, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 10, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 11, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 12, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 13, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 14, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 15, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 16, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($curp, 17, 1), 0, 0, 'C');
        $pdf->Cell(25.7, $char_height, '', 0, 0, 'C');
        // FECHA DE NACIMIENTO
        // Día
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 1, 1), 0, 0, 'C');
        $pdf->Cell(1.1, $char_height, '', 0, 0, 'C');
        // Mes
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 2, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 3, 1), 0, 0, 'C');
        $pdf->Cell(1.4, $char_height, '', 0, 0, 'C');
        // Año
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 4, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 5, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 6, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($fecha_nacimiento, 7, 1), 0, 0, 'C');
        $pdf->Cell(26.3, $char_height, '', 0, 0, 'C');
        // ENTIDAD DE NACIMIENTO
        $pdf->Cell(32.5, 3.4, $entidad_nacimiento, 0, 0, 'C');
        $pdf->Cell(0, 3.4, '', 0, 1);

        /*
        |--------------------------------------------------------------------------
        | ROW 3
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 3.8, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(113, $char_height, '', 0, 0, 'C'); //Margin left

        //EDAD
        $pdf->Cell($char_width, $char_height, substr($edad, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($edad, 1, 1), 0, 0, 'C');
        $pdf->Cell(22.3, $char_height, '', 0, 0, 'C');
        // SEXO
        // Hombre
        $pdf->Cell(2.45, 3, $sexo_h, 0, 0, 'C');
        $pdf->Cell(10.7, $char_height, '', 0, 0);
        // Mujer
        $pdf->Cell(2.45, 3, $sexo_m, 0, 0, 'C');
        $pdf->Cell(0, 3, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 3
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 3.9, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(49.2, $char_height, '', 0, 0, 'C'); //Margin left
        //SERVICIOS DE SALUD
        // IMSS
        $pdf->Cell(2.45, $char_height, $imss, 0, 0, 'C');
        $pdf->Cell(8.1, $char_height, '', 0, 0, 'C');
        // ISSSTE
        $pdf->Cell(2.45, $char_height, $issste, 0, 0, 'C');
        $pdf->Cell(8.7, $char_height, '', 0, 0, 'C');
        // PEMEX
        $pdf->Cell(2.45, $char_height, $pemex, 0, 0, 'C');
        $pdf->Cell(9.6, $char_height, '', 0, 0, 'C');
        // SEDENA
        $pdf->Cell(2.45, $char_height, $sedena, 0, 0, 'C');
        $pdf->Cell(9.75, $char_height, '', 0, 0, 'C');
        // SEMAR
        $pdf->Cell(2.45, $char_height, $semar, 0, 0, 'C');
        $pdf->Cell(8.6, $char_height, '', 0, 0, 'C');
        // Gob. Estatal
        $pdf->Cell(2.45, $char_height, $gob_estatal, 0, 0, 'C');
        $pdf->Cell(12.1, $char_height, '', 0, 0, 'C');
        // Seguro privado
        $pdf->Cell(2.45, $char_height, $seguro_privado, 0, 0, 'C');
        $pdf->Cell(9.7, $char_height, '', 0, 0, 'C');
        // Seguro popular
        $pdf->Cell(2.45, $char_height, $seguro_popular, 0, 0, 'C');
        $pdf->Cell(8.2, $char_height, '', 0, 0, 'C');
        // Se ignora
        $pdf->Cell(2.45, $char_height, $se_ignora, 0, 0, 'C');
        $pdf->Cell(9.5, $char_height, '', 0, 0, 'C');
        // Otro
        $pdf->Cell(2.45, 2, $otro, 0, 0, 'C');
        $pdf->Cell(6.1, $char_height, '', 0, 0, 'C');
        // PROSPERA
        $pdf->Cell(2.45, $char_height, $prospera, 0, 0, 'C');
        $pdf->Cell(0, $char_height, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 4
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 1.25, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(164, $char_height, '', 0, 0, 'C'); //Margin left
        // Ninguna
        $pdf->Cell(2.45, $char_height, $ninguna, 0, 0, 'C');
        $pdf->Cell(2.45, $char_height, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 5
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 0.5, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(29, $char_height, '', 0, 0, 'C'); //Margin left
        // Num. Afiliación
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 2, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 3, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 4, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 5, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 6, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 7, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 8, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 9, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 10, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 11, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 12, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 13, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 14, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 15, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 16, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_afiliacion, 17, 1), 0, 0, 'C');
        $pdf->Cell(3.5, $char_height, '', 0, 0, 'C');
        // Num. Familiar
        $pdf->Cell($char_width, $char_height, substr($num_familiar, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_familiar, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($num_familiar, 2, 1), 0, 0, 'C');
        $pdf->Cell(28.2, $char_height, '', 0, 0, 'C');
        // GRATUIDAD
        // Sí
        $pdf->Cell(2.5, 3.5, $gratuidad_si, 0, 0, 'C');
        $pdf->Cell(4.5, $char_height, '', 0, 0, 'C');
        // No
        $pdf->Cell(2.5, 3.5, $gratuidad_no, 0, 0, 'C');
        $pdf->Cell(0, 3.5, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 6
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 5, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(39.8, $char_height, '', 0, 0, 'C'); //Margin left
        // TIPO DE VIALIDAD
        $pdf->Cell(39.6, $char_height, $tipo_vialidad, 0, 0, 'C');
        $pdf->Cell(23, $char_height, '', 0, 0, 'C');
        // NOMBRE DE VIALIDAD
        $pdf->Cell(39.6, $char_height, $nombre_vialidad, 0, 0, 'C');
        $pdf->Cell(10.4, $char_height, '', 0, 0, 'C');
        // NUMERO EXTERIOR
        $pdf->Cell(10.6, $char_height, $num_ext, 0, 0, 'C');
        $pdf->Cell(8.7, $char_height, '', 0, 0, 'C');
        // NUMERO INTERIOR
        $pdf->Cell(10.4, $char_height, $num_int, 0, 0, 'C');
        $pdf->Cell(0, $char_height, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 7
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 3.8, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(50.8, $char_height, '', 0, 0, 'C'); //Margin left
        // TIPO DE ASENTAMIENTO HUMANO
        $pdf->Cell(43, $char_height, $tipo_asentamiento, 0, 0, 'C');
        $pdf->Cell(34, $char_height, '', 0, 0, 'C');
        // NOMBRE DE ASENTAMIENTO HUMANO
        $pdf->Cell(55, $char_height, $nombre_asentamiento, 0, 0, 'C');
        $pdf->Cell(0, $char_height, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 8
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 3.9, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(36.9, $char_height, '', 0, 0, 'C'); //Margin left
        // CODIGO POSTAL
        $pdf->Cell($char_width, $char_height, substr($codigo_postal, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($codigo_postal, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($codigo_postal, 2, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($codigo_postal, 3, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($codigo_postal, 4, 1), 0, 0, 'C');
        $pdf->Cell(13, $char_height, '', 0, 0, 'C');
        // LOCALIDAD
        $pdf->Cell(40.5, $char_height, $localidad, 0, 0, 'C');
        $pdf->Cell(1.2, $char_height, '', 0, 0, 'C');
        // LOCALIDAD CODIGO
        $pdf->Cell($char_width, $char_height, substr($localidad_codigo, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($localidad_codigo, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($localidad_codigo, 2, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($localidad_codigo, 3, 1), 0, 0, 'C');
        $pdf->Cell(20.6, $char_height, '', 0, 0, 'C');
        // MUNICIPIO
        $pdf->Cell(33, 3, $municipio, 0, 0, 'C');
        $pdf->Cell(1.9, $char_height, '', 0, 0, 'C');
        // MUNICIPIO CODIGO
        $pdf->Cell($char_width, 3, substr($municipio_codigo, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 3, substr($municipio_codigo, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 3, substr($municipio_codigo, 2, 1), 0, 0, 'C');
        $pdf->Cell(0, 3, '', 0, 1, 'C');

        /*
        |--------------------------------------------------------------------------
        | ROW 9
        |--------------------------------------------------------------------------
        */

        $pdf->Cell($page_width, 4, '', 0, 1, 'C'); // Margin top

        $pdf->Cell(45.6, $char_height, '', 0, 0, 'C'); //Margin left
        // ENTIDAD FEDERATIVA
        $pdf->Cell(86.5, $char_height, $entidad_federativa, 0, 0, 'C');
        $pdf->Cell(0.6, $char_height, '', 0, 0, 'C');
        // ENTIDAD FEDERATIVA CODIGO
        $pdf->Cell($char_width, $char_height, substr($entidad_federativa_codigo, 0, 1), 0, 0, 'C');
        $pdf->Cell($char_width, $char_height, substr($entidad_federativa_codigo, 1, 1), 0, 0, 'C');
        $pdf->Cell(14.5, $char_height, '', 0, 0, 'C');
        // TELÉFONO
        $pdf->Cell($char_width, 2.1, substr($telefono, 1, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 2, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 3, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 6, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 7, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 8, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 10, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 11, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 12, 1), 0, 0, 'C');
        $pdf->Cell($char_width, 2.1, substr($telefono, 13, 1), 0, 0, 'C');

        return $pdf->Output();
    }
}
