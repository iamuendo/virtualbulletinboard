@section("title","Manage Events | TaarifaBoard")

<x-board-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
                {{ __('Manage Events') }}
            </h2>
            <div>
                <a href="{{ route('events.create') }}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 light:hover:bg-blue-500 light:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Create Event</span>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 light:text-gray-400">
                    <thead class="text-lg text-gray-700 uppercase bg-gray-50 light:bg-gray-700 light:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            
                            <th scope="col" class="px-6 py-3">
                                Start Date
                            </th>

                            <th scope="col" class="px-6 py-3">
                                End Date
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Available Slots
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $event)
                        <tr class="bg-white border-b light:bg-gray-800 light:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap light:text-white">
                                {{ $event->title }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $event->start_date }} <span>at {{ $event->start_time }}</span>
                            </td>

                            <td class="px-6 py-4">
                                {{ $event->end_date }} <span>at {{ $event->end_time }}</span>
                            </td>

                            <td class="px-6 py-4">
                                {{ $event->available_slots }}
                            </td>
                            
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('events.edit', $event) }}" class="text-green-400 hover:text-green-600">Edit</a>
                                    <form method="POST" class="text-red-400 hover:text-red-600" action="{{ route('events.destroy', $event) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('events.destroy', $event) }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            Delete
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 light:text-gray-400">
                                No events found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-board-layout>