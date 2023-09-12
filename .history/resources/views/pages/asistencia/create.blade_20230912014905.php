@section('name')
    Asistencia
@endsection

<x-app-layout>
    <div class="w-full px-4 py-8 mx-auto sm:px-6 lg:px-8 max-w-9xl">
        <x-banner.create />
        <form method="POST" action="{{ route('asistencia.store') }}">
            @csrf
            <input type="hidden" name="empleado_id" value="{{ $empleado->id }}">
            <input type="hidden" name="fecha" value="{{ $fecha }}">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                Personal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Asistencia
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                Justificacion
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{ $empleado->apellido }} - {{ $empleado->user->name }}
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <input id="default-radio-1" type="radio" value="asistio" name="estado"
                                        onclick="habilitarJustificacion(true); mostrarCampoTardanza(false)"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 ">
                                    <label for="default-radio-1"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asistió</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="default-radio-2" type="radio" value="no_asistio" name="estado"
                                        onclick="habilitarJustificacion(false); mostrarCampoTardanza(false)"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No
                                        asistió</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="default-radio-2" type="radio" value="tardanza" name="estado"
                                        onclick="habilitarJustificacion(false); mostrarCampoTardanza(true)"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tardanza</label>
                                </div>
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                <div class="grid gap-6 mb-6">
                                    <div>
                                        <input type="text" name="justificacion" id="justificacionInput" value=""
                                        disabled placeholder="Justificación"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>

                                    <div id="campoTardanza" style="display: none;">
                                        <label for="minutos">Minutos de tardanza:</label>
                                        <input type="number" name="minutos" id="minutosInput" value=""
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</x-app-layout>

<script>
    function habilitarJustificacion(deshabilitar) {
        var justificacionInput = document.getElementById("justificacionInput");
        justificacionInput.disabled = deshabilitar;
        justificacionInput.value = ""; // Opcional: reiniciar el valor de justificación al deshabilitar

        if (deshabilitar) {
            justificacionInput.removeAttribute("required");
        } else {
            justificacionInput.setAttribute("required", "required");
        }
    }

    function mostrarCampoTardanza(mostrar) {
        var campoTardanza = document.getElementById("campoTardanza");
        if (mostrar) {
            campoTardanza.style.display = "block";
        } else {
            campoTardanza.style.display = "none";
        }
    }
</script>
