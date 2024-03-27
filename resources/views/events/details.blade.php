@section("title","Event Details | TaarifaBoard")

<x-board-layout>
    <main class="flex-1">
        <div class="py-8 xl:py-10">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 xl:max-w-5xl xl:grid xl:grid-cols-3">
                <div class="xl:col-span-2 xl:pr-8 xl:border-r xl:border-gray-200">
                    <div class="md:flex md:items-center md:justify-between md:space-x-4 xl:border-b xl:pb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">{{$event->title}}</h1>

                            <div class="mt-2 flex items-start space-x-2 text-gray-500">
                                <dt class="mt-0.5">
                                    <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/location-marker" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                </dt>
                                <dd>{{ $event->location_details }}</dd>
                            </div>

                        </div>
                    </div>
                    @auth
                    <div class="mt-4 flex space-x-3 md:mt-3" x-data="{
                                booking: @js($booking),
                                likeEvent: @js($like),
                                bookmarkEvent: @js($bookmarkEvent),

                                onHandleBooking() {
                                    axios.post(`/events/booked/{{ $event->id }}`).then(res => {
                                        this.booking = res.data
                                    })
                                },
                                onHandleLike() {
                                    axios.post(`/events/liked/{{ $event->id }}`).then(res => {
                                        this.likeEvent = res.data
                                    })
                                },
                                onHandleBookmarkEvent() {
                                    axios.post(`/events/saved/{{ $event->id }}`).then(res => {
                                        this.bookmarkEvent = res.data
                                    })
                                }
                        }">
                        <button type="button" @click="onHandleBooking" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" :class="booking ? 'bg-red-500 hover:bg-red-800' : 'bg-red hover:bg-gray-50'">
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                            </svg>
                            <span>RSVP</span>
                        </button>

                        <button type="button" @click="onHandleLike" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" :class="likeEvent ? 'bg-red-500 hover:bg-red-800' : 'bg-red hover:bg-gray-50'">
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                            </svg>
                            <span>Like</span>
                        </button>

                        <button type="button" @click="onHandleBookmarkEvent" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" :class="bookmarkEvent ? 'bg-orange-500 hover:bg-orange-800' : 'bg-red hover:bg-gray-50'">
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/bookmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0 1 11.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 0 1-1.085.67L12 18.089l-7.165 3.583A.75.75 0 0 1 3.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93Z" clip-rule="evenodd" />
                            </svg>
                            <span>Bookmark</span>
                        </button>
                    </div>
                    @endauth
                    <div class="mt-8 xl:col-span-1 xl:pl-8">
                        <img class="object-contain object-center w-full h-60 xl:h-[25rem] rounded-xl" src="{{ url('/storage/' . $event->poster) }}" alt="{{ $event-> title }}">
                    </div>
                    <aside class="mt-8 xl:hidden">
                        <div class="space-y-4">
                            <h2 class="text-sm font-medium text-gray-500">Event Time</h2>
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-900 text-sm font-medium">Starts on <time date="{{ $event->start_date->format('Y-m-d') }}">{{ $event->start_date->format('Y-m-d') }} at {{ $event->start_time }}</time></span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-900 text-sm font-medium">Ends on <time date="{{ $event->end_date->format('Y-m-d') }}">{{ $event->end_date->format('Y-m-d') }} at {{ $event->end_time }}</time></span>
                            </div>
                        </div>
                        <div class="mt-5 space-y-5">
                            <h2 class="text-sm font-medium text-gray-500">Registration Status</h2>
                            @if ($event->isRegistrationOpen)
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-green-500" x-description="Heroicon name: solid/lock-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z"></path>
                                </svg>
                                <span class="text-green-700 text-sm font-medium">Open</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/user-group" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                                    <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                </svg>
                                <p class="text-gray-900 text-sm font-medium">{{ $event->available_slots }} <span>Slots Left !</span></p>
                            </div>
                            @else
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-red-500" x-description="Heroicon name: solid/lock-closed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-red-700 text-sm font-medium">Closed</span>
                            </div>
                            @endif
                        </div>
                        <div class="mt-6 border-t border-b border-gray-200 py-6 space-y-8">

                            <div>
                                <h2 class="text-sm font-medium text-gray-500">Tags</h2>
                                <ul role="list" class="mt-2 leading-8">
                                    @foreach ($event->tags as $tag)
                                    <li class="inline">
                                        <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                            <div class="text-sm font-medium text-gray-900">{{$tag->name}}</div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div>
                                <h2 class="text-sm font-medium text-gray-500">Organiser</h2>
                                <ul role="list" class="mt-3 space-y-3">
                                    <li class="flex justify-start">
                                        <a href="#" class="flex items-center space-x-3">
                                            <div class="text-sm font-bold text-gray-900">{{ $event->user->name }}</div>
                                        </a>
                                    </li>
                                    <li class="flex justify-start">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href="mailto:{{ $event->user->email }}">
                                                Contact via Email
                                                <span class="text-blue-500">{{ $event->user->email }}</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="py-3 xl:pt-6 xl:pb-0">
                        <h2 class="sr-only">Description</h2>
                        <div class="prose max-w-none">
                            <p>
                                {{$event->description}}
                            </p>
                        </div>
                    </div>
                    <section aria-labelledby="event-forum" class="mt-8 xl:mt-10">
                        <div>
                            <div class="divide-y divide-gray-200">
                                <div class="pb-4">
                                    <h2 id="event-forum" class="text-lg font-medium text-gray-900">Event Forum</h2>
                                </div>
                                <div class="pt-6">
                                    <div class="flow-root">
                                        <ul role="list" class="-mb-8">

                                            <li>
                                                <div class="relative pb-8">

                                                    <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                                    <div class="relative flex items-start space-x-3">

                                                        <div class="relative">
                                                            <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80" alt="">

                                                            <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                                <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/chat-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <div>
                                                                <div class="text-sm">
                                                                    <a href="#" class="font-medium text-gray-900">Isaac Muendo</a>
                                                                </div>
                                                                <p class="mt-0.5 text-sm text-gray-500">
                                                                    Commented 6d ago
                                                                </p>
                                                            </div>
                                                            <div class="mt-2 text-sm text-gray-700">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis sed purus nam.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="relative pb-8">
                                                    <div class="relative flex items-start space-x-3">
                                                        <div class="relative">
                                                            <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80" alt="">
                                                            <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                                <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/chat-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <div>
                                                                <div class="text-sm">
                                                                    <a href="#" class="font-medium text-gray-900">Jason Meyers</a>
                                                                </div>
                                                                <p class="mt-0.5 text-sm text-gray-500">
                                                                    Commented 2h ago
                                                                </p>
                                                            </div>
                                                            <div class="mt-2 text-sm text-gray-700">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis sed purus nam. Scelerisque amet elit non sit ut tincidunt condimentum. Nisl ultrices eu venenatis diam.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-6">
                                        <div class="flex space-x-3">
                                            <div class="flex-shrink-0">
                                                <div class="relative">
                                                    <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80" alt="">
                                                    <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                        <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/chat-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <form action="#">
                                                    <div>
                                                        <label for="comment" class="sr-only">Comment</label>
                                                        <textarea id="comment" name="comment" rows="3" class="shadow-sm block w-full focus:ring-gray-900 focus:border-gray-900 sm:text-sm border border-gray-300 rounded-md" placeholder="Leave a comment"></textarea>
                                                    </div>
                                                    <div class="mt-6 flex items-center justify-end space-x-4">
                                                        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                                            Comment
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <aside class="hidden xl:block xl:pl-8">
                    <div class="space-y-4">
                        <h2 class="text-sm font-medium text-gray-500">Event Time</h2>
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">Starts on <time date="{{ $event->start_date->format('Y-m-d') }}">{{ $event->start_date->format('Y-m-d') }} at {{ $event->start_time }}</time></span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">Ends on <time date="{{ $event->end_date->format('Y-m-d') }}">{{ $event->end_date->format('Y-m-d') }} at {{ $event->end_time }}</time></span>
                        </div>
                    </div>

                    <div class="mt-6 border-t border-gray-200 py-6 space-y-4">
                        <h2 class="text-sm font-medium text-gray-500">Registration Status</h2>
                        @if ($event->isRegistrationOpen)
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 w-5 text-green-500" x-description="Heroicon name: solid/lock-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z"></path>
                            </svg>
                            <span class="text-green-700 text-sm font-medium">Open</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/user-group" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                                <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                            </svg>
                            <p class="text-gray-900 text-sm font-medium"> {{ $event->available_slots }} <span>Slots Left !</span></p>
                        </div>
                        @else
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 w-5 text-red-500" x-description="Heroicon name: solid/lock-closed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-red-700 text-sm font-medium">Closed</span>
                        </div>
                        @endif
                    </div>
                    <div class="mt-6 border-t border-gray-200 py-6 space-y-5">
                        <div>
                            <h2 class="text-sm font-medium text-gray-500">Organiser</h2>
                            <ul role="list" class="mt-3 space-y-3">
                                <li class="flex justify-start">
                                    <a href="#" class="flex items-center space-x-3">
                                        <div class="text-sm font-bold text-gray-900">{{ $event->user->name }}</div>
                                    </a>
                                </li>
                                <li class="flex justify-start">
                                    <a href="#" class="flex items-center space-x-3">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href="mailto:{{ $event->user->email }}">
                                                Contact via Email
                                                <span class="text-blue-500">{{ $event->user->email }}</span>
                                            </a>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3 border-t border-gray-200 py-6 space-y-5">
                        <div>
                            <h2 class="text-sm font-medium text-gray-500">Tags</h2>
                            <ul role="list" class="mt-2 leading-8">
                                @foreach ($event->tags as $tag)
                                <li class="inline">
                                    <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                        <div class="text-sm font-medium text-gray-900">{{ $tag->name }}</div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
</x-board-layout>