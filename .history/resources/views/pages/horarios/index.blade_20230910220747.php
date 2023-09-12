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
                        <td>{{ $empleado->user->name }}</td>
                        @foreach (['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
                            <td>
                                @php
                                    $descansa = old("{$dia}_descansa");
                                    $manana_entrada = old("{$dia}_manana_entrada");
                                    $manana_salida = old("{$dia}_manana_salida");
                                    $tarde_entrada = old("{$dia}_tarde_entrada");
                                    $tarde_salida = old("{$dia}_tarde_salida");
                                @endphp

                                @if ($descansa === 'on')
                                    Descansa
                                @else
                                    @if ($manana_entrada && $manana_salida && $tarde_entrada && $tarde_salida)
                                        Trabaja todo el día
                                    @else
                                        @if ($manana_entrada && $manana_salida)
                                            Turno Mañana
                                        @endif
                                        @if ($tarde_entrada && $tarde_salida)
                                            Turno Tarde
                                        @endif
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
