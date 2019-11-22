<?php
namespace App\Http;
use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {

    function Cell( $w, $h = 0, $t = '', $b = 0, $l = 0, $a = '', $f = false, $y = '' ) {

        parent::Cell( $w, $h, iconv( 'UTF-8', 'windows-1252', $t ), $b, $l, $a, $f, $y );

    }

}