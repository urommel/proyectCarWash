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
                @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->user->name }}</td>
                    @foreach(['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
                    <td>
                        @php
                            $horario = $empleado->horarios->where('dia', $dia)->first();
                        @endphp

                        @if ($horario)
                            @if ($horario->descansa)
                                Descansa
                            @else
                                @if ($horario->manana_entrada && $horario->manana_salida && $horario->tarde_entrada && $horario->tarde_salida)
                                    Trabaja todo el día
                                @else
                                    @if ($horario->manana_entrada && $horario->manana_salida)
                                        Turno Mañana
                                    @endif
                                    @if ($horario->tarde_entrada && $horario->tarde_salida)
                                        Turno Tarde
                                    @endif
                                @endif
                            @endif
                        @else
                            No trabaja
                        @endif
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>



    </div>
</x-app-layout>
