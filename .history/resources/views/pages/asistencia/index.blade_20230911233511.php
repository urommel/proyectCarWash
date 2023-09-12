@section('name')
    Asistencia
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.index />


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Empleados
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Obaservaciones
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Accion
                        </th>
                    </tr>
                </thead>
                @foreach ($empleados as $key => $empleado)
                    <tbody>
                        <tr
                            class="{{ $key % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} {{ $key % 2 == 0 ? 'dark:bg-gray-900' : 'dark:bg-gray-800' }} dark:border-gray-700 border-b">
                            <th scope="row"
                                class="px-6 py-4 font-medium {{ $key % 2 == 0 ? 'text-gray-900' : 'text-gray-700' }} whitespace-nowrap dark:text-white">
                                {{ $empleado->user->name }}
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                {{ now()->format('d, F Y') }}
                            </td>
                            <td class="px-6 py-4">
                                
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium {{ $key % 2 == 0 ? 'text-blue-600' : 'text-blue-500' }} dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <!-- El resto de tus filas de datos aquí -->
                    </tbody>
                @endforeach



            </table>
        </div>






    </div>
</x-app-layout>
