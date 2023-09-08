@section('name')
    Horarios
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.create />

        @foreach ($empleados as $empleado)
            <h1>Horarios de {{ $empleado->user->name }}</h1>

            @if (count($empleados->horarios) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Día de la semana</th>
                            <th>Turno de mañana</th>
                            <th>Turno de tarde</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleado->horarios as $horario)
                            <tr>
                                <td>{{ $horario->dia_semana }}</td>
                                <td>{{ $horario->hora_inicio_manana }} - {{ $horario->hora_fin_manana }}</td>
                                <td>{{ $horario->hora_inicio_tarde }} - {{ $horario->hora_fin_tarde }}</td>
                                <td>
                                    <a href="{{ route('horarios.edit', $horario->id) }}"
                                        class="btn btn-primary">Editar</a>
                                    <!-- Agrega aquí un formulario para eliminar el horario si es necesario -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No se han asignado horarios a este empleado.</p>
            @endif
            @endforeach
            En este ejemplo, estamos iterando sobre la colección $empleados y para cada empleado, estamos mostrando sus horarios si los tiene. Para acceder a los horarios de un empleado en particular, utilizamos $empleado->horarios.

            Asegúrate de que la relación horarios esté definida correctamente en el modelo Empleado para que Laravel pueda recuperar los horarios asociados a cada empleado.

            Si sigues teniendo problemas o necesitas más ayuda, proporciona más detalles sobre tu código en el controlador y en la vista, y estaré encantado de ayudarte a resolver el problema específico.






    </div>
</x-app-layout>
