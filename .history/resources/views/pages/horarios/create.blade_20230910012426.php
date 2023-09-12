@section('name')
    Horarios
@endsection

{{-- <label for="{{ $dia }}" class="font-bold">{{ ucfirst($dia) }}</label>
                        <input type="checkbox" name="{{ $dia }}_descansa" id="{{ $dia }}_descansa"
                            onchange="toggleHorarios('{{ $dia }}_descansa', '{{ $dia }}_horarios')">
                        <label for="{{ $dia }}_descansa">Descansa</label> --}}

<x-app-layout>
    <div class="w-full px-4 py-8 mx-auto sm:px-6 lg:px-8 max-w-9xl">
        <x-banner.create />
        <form method="POST" action="{{ route('horarios.store') }}">
            @csrf
            <input type="hidden" name="empleado_id" value="{{ $empleado->id }}">

            <div class="grid grid-cols-4 gap-6 mb-6">
                <div>
                    <h2 class="font-bold text-center">Día</h2>
                </div>
                <div>
                    <h2 class="font-bold text-center">Descansa</h2>
                </div>
                <div>
                    <h2 class="font-bold text-center">Turno Mañana</h2>
                </div>
                <div>
                    <h2 class="font-bold text-center">Turno Tarde</h2>
                </div>
                @foreach (['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
                    <div class="p-4 border border-gray-200 rounded dark:border-gray-700">
                        <label for="{{ $dia }}"
                            class="font-bold text-center {{ old($dia . '_descansa') ? 'text-gray-500' : '' }}">{{ ucfirst($dia) }}</label>
                    </div>
                    <div class="p-4 border border-gray-200 rounded dark:border-gray-700">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="{{ $dia }}_descansa" id="{{ $dia }}_descansa"
                                onchange="toggleHorarios('{{ $dia }}_descansa', '{{ $dia }}_manana_entrada', '{{ $dia }}_manana_salida', '{{ $dia }}_tarde_entrada', '{{ $dia }}_tarde_salida')"
                                {{ old($dia . '_descansa') ? 'checked' : '' }} class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="{{ $dia }}_descansa">Descansa</span>
                        </label>
                    </div>
                    <div class="p-4 border border-gray-200 rounded dark:border-gray-700">
                        <input type="time" name="{{ $dia }}_manana_entrada"
                            id="{{ $dia }}_manana_entrada" {{ old($dia . '_descansa') ? 'disabled' : '' }}>
                        <input type="time" name="{{ $dia }}_manana_salida"
                            id="{{ $dia }}_manana_salida" {{ old($dia . '_descansa') ? 'disabled' : '' }}>
                    </div>
                    <div class="p-4 border border-gray-200 rounded dark:border-gray-700">
                        <input type="time" name="{{ $dia }}_tarde_entrada"
                            id="{{ $dia }}_tarde_entrada" {{ old($dia . '_descansa') ? 'disabled' : '' }}>
                        <input type="time" name="{{ $dia }}_tarde_salida"
                            id="{{ $dia }}_tarde_salida" {{ old($dia . '_descansa') ? 'disabled' : '' }}>
                    </div>
                @endforeach
                <div>
                    <button type="submit" class="col-span-4 px-4 py-2 mt-4 text-white bg-blue-600 rounded">Guardar</button>
                </div>

            </div>
        </form>
    </div>
</x-app-layout>

<script>
    function toggleHorarios(checkboxId, entradaMananaId, salidaMananaId, entradaTardeId, salidaTardeId) {
        const checkbox = document.getElementById(checkboxId);
        const entradaManana = document.getElementById(entradaMananaId);
        const salidaManana = document.getElementById(salidaMananaId);
        const entradaTarde = document.getElementById(entradaTardeId);
        const salidaTarde = document.getElementById(salidaTardeId);

        if (checkbox.checked) {
            entradaManana.disabled = true;
            salidaManana.disabled = true;
            entradaTarde.disabled = true;
            salidaTarde.disabled = true;
        } else {
            entradaManana.disabled = false;
            salidaManana.disabled = false;
            entradaTarde.disabled = false;
            salidaTarde.disabled = false;
        }
    }
</script>





{{--
<script>
    function toggleHorarios(checkboxId, horariosId) {
        const checkbox = document.getElementById(checkboxId);
        const horariosDiv = document.getElementById(horariosId);
        const inputs = horariosDiv.getElementsByTagName('input');

        for (let i = 0; i < inputs.length; i++) {
            inputs[i].disabled = checkbox.checked;
        }
    }
</script> --}}
