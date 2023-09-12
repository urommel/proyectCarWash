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
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th>Personal</th>
                            <th>Asistencia</th>
                            <th>Justificacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ }}</td>
                            {{--<input type="hidden" name="personal_id" value="{{ $personals->first()->id }}">
                            @foreach ($horarios as $horario)
                                <input type="hidden" name="diaH[]" value="{{ $horario->dia }}">
                            @endforeach --}}
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="estado"
                                        class="custom-control-input" value="asistio"
                                        onclick="habilitarJustificacion(true); mostrarCampoTardanza(false)">
                                    <label class="custom-control-label" for="customRadioInline1">Asistió</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="estado"
                                        class="custom-control-input" value="no_asistio"
                                        onclick="habilitarJustificacion(false); mostrarCampoTardanza(false)">
                                    <label class="custom-control-label" for="customRadioInline2">No
                                        asistió</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" name="estado"
                                        class="custom-control-input" value="tardanza"
                                        onclick="habilitarJustificacion(true); mostrarCampoTardanza(true)">
                                    <label class="custom-control-label" for="customRadioInline3">Tardanza</label>
                                </div>
                                <div id="campoTardanza" style="display: none;">
                                    <label for="minutos">Minutos de tardanza:</label>
                                    <input type="number" class="form-control" name="minutos" id="minutosInput">
                                </div>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="justificacion" id="justificacionInput"
                                    value="" disabled>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
