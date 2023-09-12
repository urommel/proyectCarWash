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

            
        </form>
    </div>
</x-app-layout>
