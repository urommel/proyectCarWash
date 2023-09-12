@section('name')
    Horarios
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.index />

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
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->name }}</td>
                        @foreach (['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
                            <td>
                                @php
    // Obtén el horario del empleado para el día actual
    $horario = $empleado->horarios ? $empleado->horarios->where('dia', $dia)->first() : null;
@endphp


                                @if (!$horario)
                                    No trabaja
                                @elseif ($horario->descansa)
                                    Descansa
                                @else
                                    @if ($horario->manana_entrada && $horario->manana_salida && $horario->tarde_entrada && $horario->tarde_salida)
                                        Trabaja todo el día
                                    @elseif ($horario->manana_entrada && $horario->manana_salida)
                                        Turno Mañana
                                    @elseif ($horario->tarde_entrada && $horario->tarde_salida)
                                        Turno Tarde
                                    @else
                                        No trabaja
                                    @endif
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>
