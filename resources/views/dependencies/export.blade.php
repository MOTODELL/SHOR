<table>
    <thead>
    <tr>
        <th style="width:25px;background-color: #70a1ff;border: 1px solid #000000;">Área de servicio</th>
    </tr>
    </thead>
    <tbody>
        @foreach($dependencies as $dependency)
            <tr>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $dependency->description }}</td>
            </tr>
        @endforeach
        <tr>
            <td style="border-top:1px solid #000000;"></td>
        </tr>
    </tbody>
</table>