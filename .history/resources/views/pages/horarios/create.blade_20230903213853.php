@section('name')
    Horarios
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.create />

        @foreach ($empleados as $empleado)
            <h1>Horarios de {{ $empleado->user->name }}</h1>

            @if (count($empleado->horarios) > 0)
                <ul>
                    @foreach ($empleado->horarios as $horario)
                        <li>Hora de inicio: {{ $horario->hora_inicio }}</li>
                        <li>Hora de fin: {{ $horario->hora_fin }}</li>
                        {{-- Agregar más detalles de horario aquí si es necesario --}}
                    @endforeach
                </ul>
            @else
                <p>No se encontraron horarios para este empleado.</p>
            @endif
        @endforeach

    </div>
</x-app-layout>
