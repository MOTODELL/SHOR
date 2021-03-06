<table>
    <thead>
    <tr>
        <th style="width:17px;background-color: #70a1ff;border: 1px solid #000000;">Apellido paterno</th>
        <th style="width:17px;background-color: #70a1ff;border: 1px solid #000000;">Apellido materno</th>
        <th style="width:27px;background-color: #70a1ff;border: 1px solid #000000;">Nombre</th>
        <th style="width:17px;background-color: #70a1ff;border: 1px solid #000000;">Afiliación</th>
        <th style="width:25px;background-color: #70a1ff;border: 1px solid #000000;">Núm. Afiliación</th>
        <th style="width:26px;background-color: #70a1ff;border: 1px solid #000000;">CURP</th>
        <th style="width:8px;background-color: #70a1ff;border: 1px solid #000000;">Sexo</th>
        <th style="width:19px;background-color: #70a1ff;border: 1px solid #000000;">Fecha de nacimiento</th>
        <th style="width:33px;background-color: #70a1ff;border: 1px solid #000000;">Lugar de nacimiento</th>
        <th style="width:15px;background-color: #70a1ff;border: 1px solid #000000;">Teléfono</th>
        <th style="width:40px;background-color: #70a1ff;border: 1px solid #000000;">Vialidad</th>
        <th style="width:18px;background-color: #70a1ff;border: 1px solid #000000;">Número exterior</th>
        <th style="width:17px;background-color: #70a1ff;border: 1px solid #000000;">Número interior</th>
        <th style="width:35px;background-color: #70a1ff;border: 1px solid #000000;">Asentamiento</th>
        <th style="width:15px;background-color: #70a1ff;border: 1px solid #000000;">Código postal</th>
        <th style="width:30px;background-color: #70a1ff;border: 1px solid #000000;">Localidad</th>
        <th style="width:35px;background-color: #70a1ff;border: 1px solid #000000;">Municipio</th>
        <th style="width:35px;background-color: #70a1ff;border: 1px solid #000000;">Estado</th>
    </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
            <tr>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->paternal_lastname }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->maternal_lastname }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->name }}</td>
                @if ($patient->hasASsn())
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->ssn->ssn_type->description }}</td>
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->ssn->ssn . '-' . $patient->ssn->number }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->curp }}</td>
                @if ($patient->hasASex())
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ (($patient->sex === "H") ? "Hombre" : "Mujer" ) }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->birthdate }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->getBirthplace() }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->phone }}</td>
                @if ($patient->address->viality)
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->viality->description . ' ' . $patient->address->street }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @if ($patient->address->number_ext && $patient->address->number_ext != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->number_ext }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @if ($patient->address->number_int && $patient->address->number_int != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->number_int }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @if ($patient->address->settlement_type)
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->settlement_type->description . ' ' . $patient->address->colony }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @if ($patient->address->zip_code)
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->zip_code->code }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @if ($patient->address->locality)
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->locality->description }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @if ($patient->address->municipality)
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->municipality->description }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">-</td>
                @endif
                @if ($patient->address->state)
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $patient->address->state->description }}</td>
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