<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="cs30q ciipl ccic9 c3lv0">

            <!-- Left: Title -->
            <div class="cmrml cjc22">
                <h1 class="text-slate-800 dark:text-slate-100 font-bold clxpd ctsdk">Customers ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="ckj66 c8n67 cosmg caxss cg2lx c3myn">

                <!-- Delete button -->
                <div class="table-items-action hidden">
                    <div class="flex items-center">
                        <div class="hidden text-sm mr-2 c6dbl caoys czskp"><span class="table-items-count"></span> items selected</div>
                        <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 c18nt czq29 ciajw">Delete</button>
                    </div>
                </div>

                <!-- Dropdown -->
                <div class="calrm" x-data="{ open: false, selected: 2 }">
                    <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 c18nt cy3na czq29 c8sur cywsn cc2cs c7d6t" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                        <span class="flex items-center">
                            <svg class="text-slate-500 dark:text-slate-400 mr-2 c7hxs cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                                <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                            </svg>
                            <span x-text="$refs.options.children[selected].children[1].innerHTML">Last Month</span>
                        </span>
                        <svg class="c4cuk c7hxs cz1vo czb9f" width="11" height="7" viewBox="0 0 11 7">
                            <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                        </svg>
                    </button>
                    <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded cejl6 c21iq cwxu7 cnxcq chcol cl7jd c96ud cp2fw c318s" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c64rw cuqwi ctadz cvn01" x-transition:enter-start="opacity-0 c1fzx" x-transition:enter-end="c0inn csmxb" x-transition:leave="c64rw cuqwi ctadz" x-transition:leave-start="c0inn" x-transition:leave-end="opacity-0" style="display: none;">
                        <div class="text-sm cywsn c24n3 cz4nn" x-ref="options">
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Today</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo invisible" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last 7 Days</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie text-indigo-500" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last Month</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo invisible" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last 12 Months</span>
                            </button>
                            <button tabindex="0" class="flex items-center cma30 c1g2r czxms c96ud c6s7w cwkie" :class="selected === 4 &amp;&amp; 'text-indigo-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="mr-2 text-indigo-500 c7hxs cz1vo invisible" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>All Time</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Filter button -->
                <div class="inline-flex calrm">
                    <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c18nt cwg5b czq29 c8sur">
                        <span class="czsjw">Filter</span><wbr>
                        <svg class="c7hxs c29x4 cq5uz" viewBox="0 0 16 16">
                            <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Add customer button -->
                <button class="btn c5e6b cdsge c7qs0">
                    <svg class="c7hxs c5282 cz1vo c29x4 cq5uz" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <span class="hidden cwx2v c4j6o">Add Customer</span>
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
