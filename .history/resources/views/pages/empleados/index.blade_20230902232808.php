@section('name')
    Empleados
@endsection

<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-banner.index/>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                @foreach ($empleados as $empleado)

                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
