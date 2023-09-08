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
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                        fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M4.257 6.67l-.737-.737 1.415-1.414 15.693 15.693-1.414 1.414-.812-.811c-1.577 1.316-3.695 2.185-6.403 2.185-6.914 0-10.001-5.684-10.001-10 0-2.402.847-4.606 2.259-6.33zm1.425 1.425c-1.055 1.355-1.684 3.058-1.684 4.905 0 4.41 3.59 8 8.001 8 1.847 0 3.549-.629 4.905-1.683l-11.222-11.222zm1.233-3.709c1.489-.881 3.228-1.387 5.084-1.387 5.527 0 10.002 4.479 10.002 10.001 0 1.632-.441 3.463-1.366 5.107l-1.497-1.497c.552-1.085.863-2.312.863-3.61 0-4.413-3.59-8.001-8.002-8.001-1.298 0-2.525.311-3.61.862l-1.474-1.475zm-6.113 4.329c-.535-.824-.802-1.772-.802-2.718 0-2.757 2.233-4.995 4.991-4.995.948 0 1.896.268 2.721.803-3.172 1.217-5.692 3.739-6.91 6.91zm18.201-7.715c-.947 0-1.895.268-2.719.803 3.17 1.218 5.694 3.739 6.914 6.909.534-.823.801-1.77.801-2.717 0-2.761-2.236-4.995-4.996-4.995z" />
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
