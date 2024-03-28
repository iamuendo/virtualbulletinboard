@section("title","Discover Events | TaarifaBoard")

<x-board-layout>
    <div class="bg-white">
        <div x-data="{ open: false }" @keydown.window.escape="open = false">

            <div x-show="open" class="fixed inset-0 flex z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true" style="display: none;">
                <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25" @click="open = false" aria-hidden="true" style="display: none;">
                </div>
                <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-6 flex flex-col overflow-y-auto" style="display: none;">
                    <div class="px-4 flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button" class="-mr-2 w-10 h-10 p-2 flex items-center justify-center text-gray-400 hover:text-gray-500" @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <form class="mt-4">
                        <div x-data="{ open: false }" class="border-t border-gray-200 pt-4 pb-4">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <button type="button" x-description="Expand/collapse section button" class="w-full p-2 flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                        <span class="text-sm font-medium text-gray-900">
                                            Event Date
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="rotate-0 h-5 w-5 transform" x-description="Expand/collapse icon, toggle classes based on section open state.

Heroicon name: solid/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </legend>
                                <div class="pt-4 pb-2 px-4" id="filter-section-0" x-show="open" style="display: none;">
                                    <div class="space-y-6">

                                        <div class="flex items-center">
                                            <input type="date" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div x-data="{ open: false }" class="border-t border-gray-200 pt-4 pb-4">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <button type="button" x-description="Expand/collapse section button" class="w-full p-2 flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                        <span class="text-sm font-medium text-gray-900">
                                            Event Type
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="rotate-0 h-5 w-5 transform" x-description="Expand/collapse icon, toggle classes based on section open state.

Heroicon name: solid/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </legend>
                                <div class="pt-4 pb-2 px-4" id="filter-section-1" x-show="open" style="display: none;">
                                    <div class="space-y-6">

                                        <div class="flex items-center">
                                            <input id="category-0-mobile" name="category[]" value="events" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="category-0-mobile" class="ml-3 text-sm text-gray-500">
                                                All
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-1-mobile" name="category[]" value="concert" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="category-1-mobile" class="ml-3 text-sm text-gray-500">
                                                Concerts
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-2-mobile" name="category[]" value="exhibition" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="category-2-mobile" class="ml-3 text-sm text-gray-500">
                                                Exhibition
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-3-mobile" name="category[]" value="fundraisers" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="category-3-mobile" class="ml-3 text-sm text-gray-500">
                                                Fundraisers
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-4-mobile" name="category[]" value="networking" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="category-4-mobile" class="ml-3 text-sm text-gray-500">
                                                Networking
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-5-mobile" name="category[]" value="workshop" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="category-5-mobile" class="ml-3 text-sm text-gray-500">
                                                Workshops
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div x-data="{ open: false }" class="border-t border-gray-200 pt-4 pb-4">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <button type="button" x-description="Expand/collapse section button" class="w-full p-2 flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                        <span class="text-sm font-medium text-gray-900">
                                            Mode Of Attendance
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="rotate-0 h-5 w-5 transform" x-description="Expand/collapse icon, toggle classes based on section open state. Heroicon name: solid/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </legend>
                                <div class="pt-4 pb-2 px-4" id="filter-section-2" x-show="open" style="display: none;">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="mode-0-mobile" name="mode[]" value="hybrid" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="mode-0-mobile" class="ml-3 text-sm text-gray-500">
                                                Hybrid
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="mode-1-mobile" name="mode[]" value="free" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="mode-1-mobile" class="ml-3 text-sm text-gray-500">
                                                In-Person
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="mode-2-mobile" name="mode[]" value="paid" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="mode-2-mobile" class="ml-3 text-sm text-gray-500">
                                                Virtual
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div x-data="{ open: false }" class="border-t border-gray-200 pt-4 pb-4">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <button type="button" x-description="Expand/collapse section button" class="w-full p-2 flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                        <span class="text-sm font-medium text-gray-900">
                                            Event Charges
                                        </span>
                                        <span class="ml-6 h-7 flex items-center">
                                            <svg class="rotate-0 h-5 w-5 transform" x-description="Expand/collapse icon, toggle classes based on section open state. Heroicon name: solid/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </legend>
                                <div class="pt-4 pb-2 px-4" id="filter-section-2" x-show="open" style="display: none;">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="charges-0-mobile" name="charges[]" value="all" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="charges-0-mobile" class="ml-3 text-sm text-gray-500">
                                                All
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="charges-1-mobile" name="charges[]" value="free" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="charges-1-mobile" class="ml-3 text-sm text-gray-500">
                                                Free
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="charges-2-mobile" name="charges[]" value="paid" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="charges-2-mobile" class="ml-3 text-sm text-gray-500">
                                                Paid
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>


            <main class="max-w-2xl mx-auto py-10 px-4 sm:py-15 sm:px-6 lg:max-w-6xl lg:px-8">
                <div class="pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                    <aside>
                        <h2 class="sr-only">Filters</h2>

                        <button type="button" x-description="Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state." class="inline-flex items-center lg:hidden" @click="open = true">
                            <span class="text-sm font-medium text-gray-700">Filters</span>
                            <svg class="flex-shrink-0 ml-1 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/plus-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div class="hidden lg:block">
                            <form class="divide-y divide-gray-200 space-y-10">
                                <div>
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-blue-900">
                                            Event Date
                                        </legend>
                                        <div class="pt-6 space-y-3">
                                            <div class="flex items-center">
                                                <input type="date" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="pt-10">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-blue-900">
                                            Event Type
                                        </legend>
                                        <div class="pt-6 space-y-3">

                                            <div class="flex items-center">
                                                <input id="category-0" name="category[]" value="all" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="category-0" class="ml-3 text-sm text-gray-600">
                                                    All
                                                </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="category-1" name="category[]" value="concerts" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="category-1" class="ml-3 text-sm text-gray-600">
                                                    Concerts
                                                </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="category-2" name="category[]" value="exhibitions" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="category-2" class="ml-3 text-sm text-gray-600">
                                                    Exhibitions
                                                </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="category-3" name="category[]" value="fundraisers" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="category-3" class="ml-3 text-sm text-gray-600">
                                                    Fundraisers
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="category-4" name="category[]" value="networking" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="category-4" class="ml-3 text-sm text-gray-600">
                                                    Networking
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="category-4" name="category[]" value="workshops" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="category-4" class="ml-3 text-sm text-gray-600">
                                                    Workshops
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="pt-10">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-blue-900">
                                            Mode Of Attendance
                                        </legend>
                                        <div class="pt-6 space-y-3">

                                            <div class="flex items-center">
                                                <input id="in-person" name="location" value="in-person" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="mode-0" class="ml-3 text-sm text-gray-600">
                                                    In-Person
                                                </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="virtual" name="location" value="virtual" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="virtual" class="ml-3 text-sm text-gray-600">
                                                    Virtual
                                                </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="hybrid" name="location" value="hybrid" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                <label for="hybrid" class="ml-3 text-sm text-gray-600">
                                                    Hybrid
                                                </label>
                                            </div>

                                        </div>
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </aside>

                    <section aria-labelledby="event-heading" class="mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3">
                        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-2">

                            @foreach ($events as $event)
                            <div class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden">
                                <div class="sm:flex">
                                    <div class="sm:w-1/2">
                                        <div class="aspect-w-3 aspect-h-3 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-85">
                                            <img src="{{ asset('/storage/' . $event->poster) }}" alt="{{ $event->title }}">
                                        </div>
                                    </div>
                                    <div class="sm:w-1/2 p-4 space-y-4 flex flex-col justify-between">
                                        <h3 class="text-sm font-medium text-gray-900">
                                            <a href="{{ route('event.details', $event->id) }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $event->title }}
                                            </a>
                                        </h3>
                                        <p class="text-sm text-gray-500">{{ Str::limit($event->description, 50) }}</p>
                                        <div class="flex flex-col justify-end">
                                            <dl class="mt-2 flex flex-col text-gray-500 text-sm">
                                                <div class="flex items-start space-x-3">
                                                    <dt class="mt-0.5">
                                                        <span class="sr-only">Date</span>
                                                        <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </dt>
                                                    <dd>{{ $event->start_date->format('Y-m-d') }} at {{ $event->start_time }}</dd>
                                                </div>
                                                <div class="mt-2 flex items-start space-x-3">
                                                    <dt class="mt-0.5">
                                                        <span class="sr-only">Location</span>
                                                        <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/location-marker" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </dt>
                                                    <dd>{{ $event->location_details }}</dd>
                                                </div>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </section>

                </div>
            </main>
        </div>
    </div>
</x-board-layout>