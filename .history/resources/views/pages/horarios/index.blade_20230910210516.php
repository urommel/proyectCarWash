<table>
    <thead>
        <tr>
            <th>Empleado</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
            <th>Domingo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->nombre }}</td>
            @foreach(['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
            <td>
                @if ($empleado->{"{$dia}_descansa"} === "on")
                Descansa
                @elseif ($empleado->{"{$dia}_manana_entrada"} && $empleado->{"{$dia}_tarde_entrada"})
                Trabaja todo el día
                @elseif ($empleado->{"{$dia}_manana_entrada"})
                Turno Mañana
                @elseif ($empleado->{"{$dia}_tarde_entrada"})
                Turno Tarde
                @else
                No trabaja
                @endif
            </td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
