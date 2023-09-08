<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="cs30q ciipl ccic9 c3lv0">
    <!-- Contenedor principal con clases generales -->

    <!-- Left: Title -->
    <div class="cmrml cjc22">
        <!-- Contenedor para el título con clases específicas -->
        <h1 class="text-slate-800 dark:text-slate-100 font-bold clxpd ctsdk">Customers ✨</h1>
        <!-- Título con estilo específico, texto "Customers ✨" -->
    </div>

    <!-- Right: Actions -->
    <div class="ckj66 c8n67 cosmg caxss cg2lx c3myn">
        <!-- Contenedor para las acciones en el lado derecho con clases específicas -->

        <!-- Delete button -->
        <div class="table-items-action hidden">
            <!-- Contenedor para el botón de eliminación (oculto por defecto) -->
            <div class="flex items-center">
                <!-- Contenedor para los elementos flexibles con clases generales -->
                <div class="hidden text-sm mr-2 c6dbl caoys czskp">
                    <span class="table-items-count"></span> items selected
                </div>
                <!-- Texto que muestra la cantidad de elementos seleccionados -->
                <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 c18nt czq29 ciajw">
                    Delete
                </button>
                <!-- Botón "Delete" con estilo específico -->
            </div>
        </div>

        <!-- Dropdown -->
        <div class="calrm" x-data="{ open: false, selected: 2 }">
            <!-- Contenedor para el menú desplegable -->
            <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 c18nt cy3na czq29 c8sur cywsn cc2cs c7d6t"
                aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                <!-- Botón con estilo de menú desplegable -->
                <span class="flex items-center">
                    <svg class="text-slate-500 dark:text-slate-400 mr-2 c7hxs cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                        <!-- Icono SVG -->
                        <!-- ... -->
                    </svg>
                    <span x-text="$refs.options.children[selected].children[1].innerHTML">Last Month</span>
                </span>
                <!-- Texto del botón que muestra la selección actual -->
                <svg class="c4cuk c7hxs cz1vo czb9f" width="11" height="7" viewBox="0 0 11 7">
                    <!-- Flecha del menú desplegable -->
                    <!-- ... -->
                </svg>
            </button>
            <!-- Menú desplegable con opciones -->
            <!-- ... -->
        </div>

        <!-- Filter button -->
        <div class="inline-flex calrm">
            <!-- Contenedor para el botón de filtro -->
            <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c18nt cwg5b czq29 c8sur">
                <!-- Botón de filtro -->
                <span class="czsjw">Filter</span>
                <!-- Texto "Filter" -->
                <svg class="c7hxs c29x4 cq5uz" viewBox="0 0 16 16">
                    <!-- Icono de filtro (flechas) -->
                    <!-- ... -->
                </svg>
            </button>
        </div>

        <!-- Add customer button -->
        <button class="btn c5e6b cdsge c7qs0">
            <!-- Botón para agregar un cliente -->
            <svg class="c7hxs c5282 cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                <!-- Icono SVG para agregar cliente -->
                <!-- ... -->
            </svg>
            <span class="hidden cwx2v c4j6o">Add Customer</span>
            <!-- Texto "Add Customer" (oculto por defecto) -->
        </button>
    </div>
</div>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
