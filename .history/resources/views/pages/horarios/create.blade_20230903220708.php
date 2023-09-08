@section('name')
    Horarios
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.create />

        <form method="POST" action="{{ route('horarios.store') }}">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                @foreach (['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
                    <div>
                        <label for="{{ $dia }}" class="font-bold">{{ ucfirst($dia) }}</label>

                        <input type="checkbox" name="{{ $dia }}_descansa" id="{{ $dia }}_descansa"
                            onchange="toggleHorarios('{{ $dia }}_descansa', '{{ $dia }}_horarios')">
                        <label for="{{ $dia }}_descansa">Descansa</label>

                        <div class="horarios" id="{{ $dia }}_horarios">
                            <div>
                                <label for="{{ $dia }}_manana">Turno Mañana</label>
                                <input type="time" name="{{ $dia }}_manana_entrada"
                                    id="{{ $dia }}_manana_entrada">
                                <input type="time" name="{{ $dia }}_manana_salida"
                                    id="{{ $dia }}_manana_salida">
                            </div>
                            <div>
                                <label for="{{ $dia }}_tarde">Turno Tarde</label>
                                <input type="time" name="{{ $dia }}_tarde_entrada"
                                    id="{{ $dia }}_tarde_entrada">
                                <input type="time" name="{{ $dia }}_tarde_salida"
                                    id="{{ $dia }}_tarde_salida">
                            </div>
                        </div>
                    </div>
                @endforeach


                <button type="submit">Guardar</button>
            </div>
        </form>

    </div>
</x-app-layout>

<script>
    function toggleHorarios(checkboxId, horariosId) {
        const checkbox = document.getElementById(checkboxId);
        const horariosDiv = document.getElementById(horariosId);
        const inputs = horariosDiv.getElementsByTagName('input');

        for (let i = 0; i < inputs.length; i++) {
            inputs[i].disabled = checkbox.checked;
        }
    }
</script>
