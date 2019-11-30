<table>
    <thead>
    <tr>
        <th style="width:25px;background-color: #70a1ff;border: 1px solid #000000;">Código</th>
        <th style="width:25px;background-color: #70a1ff;border: 1px solid #000000;">Descripción</th>
    </tr>
    </thead>
    <tbody>
        @foreach($causes as $cause)
            <tr>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $cause->code }}</td>
                <td style="border-left:1px solid #000000;border-right:1px solid #000000;">{{ $cause->description }}</td>
            </tr>
        @endforeach
        <tr>
            <td style="border-top:1px solid #000000;"></td>
            <td style="border-top:1px solid #000000;"></td>
        </tr>
    </tbody>
</table>