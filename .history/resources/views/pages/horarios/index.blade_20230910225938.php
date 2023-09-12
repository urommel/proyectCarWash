@section('name')
    Horarios
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.index />


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Empleado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lunes
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Martes
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Miércoles
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Jueves
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Viernes
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                            White
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            Laptop PC
                        </td>
                        <td class="px-6 py-4">
                            $1999
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            Google Pixel Phone
                        </th>
                        <td class="px-6 py-4">
                            Gray
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            Phone
                        </td>
                        <td class="px-6 py-4">
                            $799
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            Apple Watch 5
                        </th>
                        <td class="px-6 py-4">
                            Red
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            Wearables
                        </td>
                        <td class="px-6 py-4">
                            $999
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


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
