@section('name')
    Horarios
@endsection

{{-- <label for="{{ $dia }}" class="font-bold">{{ ucfirst($dia) }}</label>
                        <input type="checkbox" name="{{ $dia }}_descansa" id="{{ $dia }}_descansa"
                            onchange="toggleHorarios('{{ $dia }}_descansa', '{{ $dia }}_horarios')">
                        <label for="{{ $dia }}_descansa">Descansa</label> --}}

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.create />

        <form method="POST" action="{{ route('horarios.store') }}">
            @csrf
            <div class="grid gap-6 mb-6 grid-cols-4">
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
                    <div class="border border-gray-200 rounded dark:border-gray-700 p-4">
                        <label for="{{ $dia }}" class="font-bold text-center">{{ ucfirst($dia) }}</label>
                    </div>
                    <div class="border border-gray-200 rounded dark:border-gray-700 p-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="{{ $dia }}_descansa" id="{{ $dia }}_descansa"
                                onchange="toggleHorarios('{{ $dia }}_descansa', '{{ $dia }}_horarios')"
                                value="" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="{{ $dia }}_descansa">Trabaja</span>
                        </label>
                    </div>
                    <div class="border border-gray-200 rounded dark:border-gray-700 p-4">
                        <input type="time" name="{{ $dia }}_manana_entrada"
                            id="{{ $dia }}_manana_entrada">
                        <input type="time" name="{{ $dia }}_manana_salida"
                            id="{{ $dia }}_manana_salida">
                    </div>
                    <div class="border border-gray-200 rounded dark:border-gray-700 p-4">
                        <input type="time" name="{{ $dia }}_tarde_entrada"
                            id="{{ $dia }}_tarde_entrada">
                        <input type="time" name="{{ $dia }}_tarde_salida"
                            id="{{ $dia }}_tarde_salida">
                    </div>
                @endforeach
                <button type="submit" class="mt-4 col-span-4 bg-blue-600 text-white rounded py-2 px-4">Guardar</button>
            </div>
        </form>


    </div>
</x-app-layout>

<script>
    function toggleHorarios(checkboxId, mananaEntradaId, mananaSalidaId, tardeEntradaId, tardeSalidaId) {
        const checkbox = document.getElementById(checkboxId);
        const mananaEntrada = document.getElementById(mananaEntradaId);
        const mananaSalida = document.getElementById(mananaSalidaId);
        const tardeEntrada = document.getElementById(tardeEntradaId);
        const tardeSalida = document.getElementById(tardeSalidaId);

        // Habilitar/deshabilitar los campos de tiempo
        mananaEntrada.disabled = checkbox.checked;
        mananaSalida.disabled = checkbox.checked;
        tardeEntrada.disabled = checkbox.checked;
        tardeSalida.disabled = checkbox.checked;

        // Cambiar el texto en función del estado del checkbox
        const label = checkbox.nextElementSibling;
        if (checkbox.checked) {
            label.querySelector('span').textContent = 'Descansa';
            label.style.backgroundColor = '#B3B3B3'; // Cambiar a color plomo
        } else {
            label.querySelector('span').textContent = 'Trabaja';
            label.style.backgroundColor = ''; // Restablecer el color de fondo
        }
    }

    // Agregar un evento para que funcione en la carga inicial de la página
    document.addEventListener('DOMContentLoaded', () => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach((checkbox) => {
            const dia = checkbox.id.replace('_descansa', ''); // Obtener el nombre del día
            const mananaEntradaId = `${dia}_manana_entrada`;
            const mananaSalidaId = `${dia}_manana_salida`;
            const tardeEntradaId = `${dia}_tarde_entrada`;
            const tardeSalidaId = `${dia}_tarde_salida`;
            toggleHorarios(checkbox.id, mananaEntradaId, mananaSalidaId, tardeEntradaId, tardeSalidaId);
        });
    });
</script>
