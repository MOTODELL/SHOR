<table>
    <thead>
    <tr>
        <th style="width:6px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Folio</th>
        <th style="width:20px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Fecha de atención</th>
        <th style="width:19px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Número exp clínico</th>
        <th style="width:19px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Estado de la cita</th>
        <th style="width:20px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Núm. Afiliación</th>
        <th style="width:40px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Nombre del beneficiario</th>
        <th style="width:26px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">CURP</th>
        <th style="width:20px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Fecha de nacimiento</th>
        <th style="width:9px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Sexo</th>
        <th style="width:13px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Edad en años</th>
        <th style="width:35px;background-color: #70a1ff;border: 1px solid #000000;text-align: center;">Diagnostico inicial</th>
    </tr>
    </thead>
    <tbody>
        @foreach($dates as $date)
            <tr>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $date->id }}</td>
                @php
                    $attention_date = $date->attention_date;
                    $attention_date = str_replace([' ', ':'], '-', $attention_date);
                    $attention_date = explode("-", $attention_date);
                    $hour = ($attention_date[3] > 12) ? str_pad(($attention_date[3] - 12), 2, '0', STR_PAD_LEFT) . ':' . $attention_date[4] . ' PM' : $attention_date[3] . ':' . $attention_date[4] . ' AM';
                    $attention_date = $attention_date[2].'/'.$attention_date[1].'/'.$attention_date[0].' '.$hour;
                @endphp
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $attention_date }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">-</td>
                @if ($date->patient->hasASsn())
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $date->patient->ssn->ssn . '-' . $date->patient->ssn->number }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;"></td>
                @endif
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $date->getStatus() }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $date->patient->fullname }}</td>
                @if ($date->patient->curp && $date->patient->curp != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $date->patient->curp }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @php
                    $birthdate = $date->patient->birthdate;
                    $birthdate = explode('-', $birthdate);
                    $birthdate = $birthdate[2] . '/' . $birthdate[1] . '/' . $birthdate[0];
                @endphp
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $birthdate }}</td>
                @if ($date->patient->hasASex())
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ (($date->patient->sex === "H") ? "Hombre" : "Mujer" ) }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">-</td>
                @endif
                @php
                    $birthDate = $date->patient->birthdate;
                    //explode the date to get month, day and year
                    $birthDate = explode("-", $birthDate);
                    //get age from date or birthdate
                    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
                        ? ((date("Y") - $birthDate[0]) - 1)
                        : (date("Y") - $birthDate[0]));
                @endphp
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;text-align: center;">{{ $age }}</td>
                @if ($date->diagnosis && $date->diagnosis != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $date->diagnosis }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
            </tr>
        @endforeach
        <tr>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
        </tr>
    </tbody>
</table>