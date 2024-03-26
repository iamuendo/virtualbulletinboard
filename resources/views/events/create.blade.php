@section("title","Create Event | TaarifaBoard")

<x-app-layout>

    <div class="py-2">
        <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div id="show_success_alert"></div>
                <form method="POST" action="{{ route('events.store') }}" id="create_event_form" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200">
                    @csrf
                    <div class="pt-2">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-blue-900">
                                {{ __('Create Event') }}
                            </h3>
                        </div>

                        <div class="pt-2">
                            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label class="tracking-wide block text-sm font-medium text-gray-700" for="event_category_id">
                                        Event Category<span class="text-red-600">*</span>
                                    </label>
                                    <select id="event_category_id" name="event_category_id" class="mt-1 appearance-none block w-full text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-200" autofocus required>
                                        <option selected="true" disabled="disabled">Select Event Category</option>
                                        @foreach ($event_categories as $eventCategory)
                                        <option value="{{ $eventCategory->id }}">{{ $eventCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('event_category_id')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="title" class="block text-sm font-medium text-gray-700">
                                        Event Title<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="title" id="title" placeholder="Career Week 2023" class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300" autofocus required>
                                    </div>
                                    @error('title')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="sm:col-span-6">
                                    <label for="poster" class="block text-sm font-medium text-gray-700">
                                        Add Event Poster
                                    </label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="poster" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                                    <span>Upload a file</span>
                                                    <input id="poster" name="poster" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                    @error('poster')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Event Description<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" rows="3" placeholder="For Example: The agenda of this event is to..." class="px-3 py-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border border-gray-300 rounded-md" autofocus required></textarea>
                                    </div>
                                    @error('description')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="start_date" class="block text-sm font-medium text-gray-700">
                                        Start Date<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1">
                                        <input type="date" name="start_date" id="start_date" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
                                    </div>
                                    @error('start_date')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="start_time" class="block text-sm font-medium text-gray-700">
                                        Start Time<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1">
                                        <input type="time" name="start_time" id="start_time" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
                                    </div>
                                    @error('start_time')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="sm:col-span-3">
                                    <label for="end_date" class="block text-sm font-medium text-gray-700">
                                        End Date<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1">
                                        <input type="date" name="end_date" id="end_date" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
                                    </div>
                                    @error('end_date')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="end_time" class="block text-sm font-medium text-gray-700">
                                        End Time<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1">
                                        <input type="time" name="end_time" id="end_time" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
                                    </div>
                                    @error('end_time')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- <div class="sm:col-span-3">
                                    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Tags</h3>
                                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        @foreach ($tags as $tag)
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                            <div class="flex items-center pl-3">
                                                <input id="vue-checkbox-list" type="checkbox" name="tags[]" value="{{ $tag->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $tag->name }}</label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div> -->
                                <div class="sm:col-span-3">
                                    <label for="available_slots" class="block text-sm font-medium text-gray-700">
                                        Available Slots<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="number" name="available_slots" id="available_slots" placeholder="100" class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                    </div>
                                    @error('available_slots')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <div x-data="{show: false}">
                                        <label for="tags" class="block text-sm font-medium text-gray-700">
                                            Tags<span class="text-red-600">*</span>
                                        </label>
                                        <a href="#" x-on:click.prevent="show = !show" class="mt-1 appearance-none block w-full text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-200">
                                            <span class="inline-block">Select Tags</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current inline-block w-4 h-4 transform transition duration-150" x-bind:class="{ 'rotate-180': show }">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </a>
                                        <div x-show.transition="show" class="mt-1 appearance-none block w-full text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-200">
                                            @foreach ($tags as $tag)
                                            <div>
                                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="inline-block mr-2" />{{ $tag->name }}
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-8">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-blue-900">
                                    Venue Details
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    Please be as specific as possible
                                </p>
                            </div>
                            <div class="mt-6">
                      
                                <fieldset class="mt-6">
                                    <div>
                                        <legend class="block text-sm font-medium text-gray-700">
                                            Mode Of Attendance<span class="text-red-600">*</span>
                                        </legend>
                                    </div>

                                    <div class="mt-4 space-y-4">
                                        @foreach ($event_mode as $eventMode)
                                        <div class="flex items-center">
                                            <input id="eventMode-{{ $eventMode->id}}" name="event_mode_id" value="{{ $eventMode->id }}" type="radio" class="event-mode-radio focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="eventMode-{{ $eventMode->id}}" class="ml-3 block text-sm font-medium capitalize text-gray-700">
                                                {{ $eventMode->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                        @error('event_mode_id')
                                        <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </fieldset>
                                <div class="pt-8" id="physical-details" style="display: none;">
                                    <div class="sm:col span-6">
                                        <label for="location_details" class="block text-sm font-medium text-gray-700">
                                            Location Details<span class="text-red-600">*</span>
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="location_details" name="location_details" rows="3" placeholder="For Example: Thika Road Campus, Main Auditorium..." class="px-3 py-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                        </div>
                                        @error('location_details')
                                        <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <label for="room_no" class="block text-sm font-medium text-gray-700">
                                                Room No<span class="text-red-600">*</span>
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="room_no" id="room_no" placeholder="For example: L204" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            @error('room_no')
                                            <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-6" id="virtual-details" style="display: none;">

                                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                                        <div class="sm:col-span-6">
                                            <label for="meeting_url" class="block text-sm font-medium text-gray-700">
                                                Meeting URL<span class="text-red-600">*</span>
                                            </label>
                                            <div class="mt-1">
                                                <input type="url" name="meeting_url" id="meeting_url" placeholder="Enter Virtual Meeting URL" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            @error('meeting_url')
                                            <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <input type="reset" value="Cancel" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            </input>
                            <input type="submit" value="Create" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            </input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>