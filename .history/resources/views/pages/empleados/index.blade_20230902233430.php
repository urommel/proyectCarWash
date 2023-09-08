@section('name')
    Empleados
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.index />


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                @foreach ($empleados as $empleado)
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nº
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apellidos
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                DNI
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Celular
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Salario
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha de Ingreso
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $empleado->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $empleado->apellido }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $empleado->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $empleado->dni }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $empleado->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $empleado->salario }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $empleado->fecha_inicio }}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
