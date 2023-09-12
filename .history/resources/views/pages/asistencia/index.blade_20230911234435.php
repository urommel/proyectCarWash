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

                            </td>
                            <td class="px-6 py-4">
                                {{ now()->format('d, F Y') }}
                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-white dark:hover:bg-white dark:text-black dark:focus:ring-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                        viewBox="0 0 640 512">
                                        <path
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zm323-128.4l-27.8-28.1c-4.6-4.7-12.1-4.7-16.8-.1l-104.8 104-45.5-45.8c-4.6-4.7-12.1-4.7-16.8-.1l-28.1 27.9c-4.7 4.6-4.7 12.1-.1 16.8l81.7 82.3c4.6 4.7 12.1 4.7 16.8.1l141.3-140.2c4.6-4.7 4.7-12.2.1-16.8z" />
                                    </svg>
                                </a>
                            </td>



                        </tr>
                        <!-- El resto de tus filas de datos aquí -->
                    </tbody>
                @endforeach



            </table>
        </div>






    </div>
</x-app-layout>
