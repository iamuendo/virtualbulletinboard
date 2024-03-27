@section("title","Edit Event | TaarifaBoard")

<x-board-layout>

    <div class="py-2">
        <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div id="show_success_alert"></div>
                <form method="POST" action="{{ route('events.update', $event) }}" id="update_event_form" x-data="{
                    category: null,
                    onCategoryChange(event) {
                        axios.get(`/categories/${event.target.value}`).then(res => {
                        this.category = res.data;
                        });
                    }
                }" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200">
                    @csrf
                    @method('PUT')
                    <div class="pt-2">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-blue-900">
                                {{ __('Edit Event') }}
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
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected($category->id === $event->event_category_id)>{{ $category->name }}</option>
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
                                        <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}" class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                    </div>
                                    @error('title')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700" for="poster">Add Event Poster<span class="text-red-600">*</span></label>
                                        <input class="mt-1 block px-3 py-2 shadow-sm w-full focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border border-gray-300 rounded-md" id="poster" type="file" name="poster">
                                        @error('poster')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Event Description<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" rows="3" class="px-3 py-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $event->description }}</textarea>
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
                                        <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $event->start_date->format('Y-m-d')) }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
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
                                        <input type="time" name="start_time" id="start_time" value="{{ old('start_time', $event->start_time) }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
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
                                        <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $event->end_date->format('Y-m-d')) }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
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
                                        <input type="time" name="end_time" id="end_time" value="{{ old('end_time', $event->end_time) }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus required>
                                    </div>
                                    @error('end_time')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="available_slots" class="block text-sm font-medium text-gray-700">
                                        Available Slots<span class="text-red-600">*</span>
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="number" name="available_slots" id="available_slots" value="{{ old('available_slots', $event->available_slots) }}" class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                    </div>
                                    @error('available_slots')
                                    <div class="invalid-feedback mt-2 text-red-500 text-xs italic">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <div x-data="{show: true}">
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
                                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" @checked($event->hasTag($tag)) class="inline-block mr-2" />{{ $tag->name }}
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
                                        @foreach ($modes as $mode)
                                        <div class="flex items-center">
                                            <input id="mode-{{ $mode->id}}" name="event_mode_id" value="{{ $mode->id }}" @selected($mode->id === $event->event_mode_id) type="radio" class="event-mode-radio-edit focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                            <label for="mode-{{ $mode->id}}" class="ml-3 block text-sm font-medium capitalize text-gray-700">
                                                {{ $mode->name }}
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
                                            <textarea id="location_details" name="location_details" rows="3" class="px-3 py-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $event->location_details }}</textarea>
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
                                                <input type="text" name="room_no" id="room_no" value="{{ old('room_no', $event->room_no) }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
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
                                                <input type="url" name="meeting_url" id="meeting_url" value="{{ old('meeting_url', $event->meeting_url) }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
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
                            <input type="submit" value="Update" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            </input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-board-layout>