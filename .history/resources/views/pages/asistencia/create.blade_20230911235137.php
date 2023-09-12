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

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="hora_entrada" class="font-bold">Hora de Entrada:</label>
                    <input type="time" name="hora_entrada" id="hora_entrada" class="w-full p-2 border rounded">
                </div>
                <div>
                    <label for="hora_salida" class="font-bold">Hora de Salida:</label>
                    <input type="time" name="hora_salida" id="hora_salida" class="w-full p-2 border rounded">
                </div>
            </div>

            <div>
                <label for="observacion" class="font-bold">Observación:</label>
                <textarea name="observacion" id="observacion" class="w-full p-2 border rounded"></textarea>
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar</button>
            </div>
        </form>
    </div>
</x-app-layout>
