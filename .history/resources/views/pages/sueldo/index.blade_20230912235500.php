@section('name')
    Asistencia
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.index />
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                {{-- <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Empleado
                        </th>
                        <th scope="col" class="px-6 py-3">Lunes</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Martes</th>
                        <!-- Resto de los días de la semana -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{ $empleado->user->name }}
                            </th>
                            @foreach (['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
                                @php
                                    $horario = $empleado->horarios->where('dia', $dia)->first();
                                    $asistencia = $empleado->asistencias
                                        ->where('fecha', '>=', $inicioDeSemana)
                                        ->where('fecha', '<=', $finDeSemana)
                                        ->where('estado', 'asistio')
                                        ->count();

                                    // Inicializa el sueldo diario en 0
                                    $sueldoDiario = 0;

                                    // Verifica si se encontró un horario
                                    if ($horario) {
                                        // Verifica si el horario tiene las propiedades necesarias
                                        if ($horario->manana_entrada && $horario->manana_salida && $horario->tarde_entrada && $horario->tarde_salida) {
                                            $sueldoDiario = $empleado->salario;
                                        }
                                    }

                                    // Aplica descuento por asistencia
                                    $sueldoDiario -= $asistencia > 0 ? $empleado->salario / 5 : 0;
                                @endphp

                                <td
                                    class="px-6 py-4 whitespace-nowrap {{ $loop->iteration % 2 == 0 ? 'bg-gray-50 dark:bg-gray-800' : '' }}">
                                    @if ($sueldoDiario > 0)
                                        <p class="text-green-600 font-bold">{{ $sueldoDiario }}</p>
                                    @else
                                        <p class="text-red-600 font-bold">Descansa</p>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>

        </div>
    </div>
</x-app-layout>
