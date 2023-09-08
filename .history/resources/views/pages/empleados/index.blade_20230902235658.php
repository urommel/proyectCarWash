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
                                Horario
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
                                {{-- {{ $empleado->fecha_inicio }} --}}
                                {{-- {{ date('d-m-Y', strtotime($empleado->fecha_inicio)) }} --}}
                                {{ date('d, F Y', strtotime($empleado->fecha_inicio)) }}
                            </td>
                            <td class="px-6 py-4">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    <span class="sr-only">Icon description</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
