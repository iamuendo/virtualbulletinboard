@section("title","Discover Events | TaarifaBoard")

<x-board-layout>
    <div class="bg-white">
        <div x-data="{ open: false }" @keydown.window.escape="open = false">

            <main class="max-w-2xl mx-auto py-10 px-4 sm:py-15 sm:px-6 lg:max-w-6xl lg:px-8">
                <div class="border-b border-gray-200 pb-10">
                    <h1 class="flex-1 text-lg font-medium tracking-tight text-blue-900">Discover Events</h1>
                </div>
                <div class="pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
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