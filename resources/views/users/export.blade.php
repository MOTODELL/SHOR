<table>
    <thead>
    <tr>
        <th style="width:16px;background-color: #70a1ff;border: 1px solid #000000;">Apellido paterno</th>
        <th style="width:16px;background-color: #70a1ff;border: 1px solid #000000;">Apellido materno</th>
        <th style="width:25px;background-color: #70a1ff;border: 1px solid #000000;">Nombre</th>
        <th style="width:15px;background-color: #70a1ff;border: 1px solid #000000;">Rol</th>
        <th style="width:20px;background-color: #70a1ff;border: 1px solid #000000;">Dependencia</th>
        <th style="width:24px;background-color: #70a1ff;border: 1px solid #000000;">CURP</th>
        <th style="width:8px;background-color: #70a1ff;border: 1px solid #000000;">Sexo</th>
        <th style="width:19px;background-color: #70a1ff;border: 1px solid #000000;">Fecha de nacimiento</th>
        <th style="width:33px;background-color: #70a1ff;border: 1px solid #000000;">Lugar de nacimiento</th>
        <th style="width:13px;background-color: #70a1ff;border: 1px solid #000000;">Teléfono</th>
        <th style="width:35px;background-color: #70a1ff;border: 1px solid #000000;">Correo electrónico</th>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->paternal_lastname }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->maternal_lastname }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->name }}</td>
                @if ($user->hasARole())
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->getRole() }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
                @endif
                @if ($user->hasADependency())
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->getDependency() }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
                @endif
                @if ($user->curp && $user->curp != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->curp }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
                @endif
                @if ($user->hasASex())
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ (($user->sex === "H") ? "Hombre" : "Mujer" ) }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
                @endif
                @if ($user->birthdate && $user->birthdate != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->birthdate }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
                @endif
                @if ($user->getBirthplace() && $user->getBirthplace() != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->getBirthplace() }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
                @endif
                @if ($user->phone && $user->phone != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->phone }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
                @endif
                @if ($user->email && $user->email != "")
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $user->email }}</td>
                @else
                    <td style="border-left:1px solid #000000;border-right:1px solid #000000;"><i>N/A</i></td>
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