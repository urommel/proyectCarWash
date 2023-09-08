@section('name')
    Horarios
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.create />

        <form method="POST" action="{{ route('horarios.store') }}">
            @csrf

            @foreach(['lunes', 'martes', 'miércoles', 'jueves', 'viernes'] as $dia)
                <div>
                    <label for="{{ $dia }}" class="font-bold">{{ ucfirst($dia) }}</label>

                    <input type="checkbox" name="{{ $dia }}_trabaja" id="{{ $dia }}_trabaja">
                    <label for="{{ $dia }}_trabaja">Trabaja</label>

                    <div class="horarios" id="{{ $dia }}_horarios" style="display: none;">
                        <div>
                            <label for="{{ $dia }}_manana">Turno Mañana</label>
                            <input type="time" name="{{ $dia }}_manana_entrada" id="{{ $dia }}_manana_entrada">
                            <input type="time" name="{{ $dia }}_manana_salida" id="{{ $dia }}_manana_salida">
                        </div>
                        <div>
                            <label for="{{ $dia }}_tarde">Turno Tarde</label>
                            <input type="time" name="{{ $dia }}_tarde_entrada" id="{{ $dia }}_tarde_entrada">
                            <input type="time" name="{{ $dia }}_tarde_salida" id="{{ $dia }}_tarde_salida">
                        </div>
                    </div>
                </div>
            @endforeach

            <button type="submit">Guardar</button>
        </form>

    </div>
</x-app-layout>


