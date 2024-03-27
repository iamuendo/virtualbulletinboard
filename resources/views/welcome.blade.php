@section("title","TaarifaBoard | Home")

<x-main-layout>
    <section class="lg:flex">
        <div class="flex items-center justify-center w-full px-6 py-8 lg:h-[32rem] lg:w-1/2">
            <div class="max-w-xl">
                <p class="text-lg font-medium leading-8 text-black">Introducing the <span class="text-blue-600 light:text-blue-400">Virtual Bulletin Board</span></p>
                <h2 class="text-3xl font-semibold text-gray-800 light:text-white lg:text-4xl">RSVP & Manage OnCampus Events</h2>

                <p class="mt-4 text-sm text-gray-500 light:text-gray-400 lg:text-base">Whether you are looking for academic, cultural, social, or recreational events, you can browse the board and discover something new. You can also post your own events and invite others to join. It's a great way to stay connected and have fun with your campus community!
                </p>

                <div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">
                    <a href="#" class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-gray-700">Get Started</a>
                    <a href="#" class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-gray-700 transition-colors duration-300 transform bg-gray-200 rounded-md lg:mx-4 hover:bg-gray-300">View Features</a>
                </div>
            </div>
        </div>

        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <div class="w-full h-full bg-cover" style="background-image: url(https://images.pexels.com/photos/8199599/pexels-photo-8199599.jpeg)">
                <div class="w-full h-full bg-black opacity-25"></div>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8" id="features">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl light:text-white"><span class="underline decoration-blue-500">Features</span></h1>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2">
                <div class="p-6 border rounded-xl border-r-gray-200 light:border-gray-700">
                    <div class="md:flex md:items-start md:-mx-4">
                        <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 light:text-white light:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <h1 class="text-xl font-medium text-gray-700 capitalize light:text-white">Event Discovery & RSVP</h1>

                            <p class="mt-3 text-gray-500 light:text-gray-300">
                                Empowers attendees to easily discover events through a user-friendly search interface.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 border rounded-xl border-r-gray-200 light:border-gray-700">
                    <div class="md:flex md:items-start md:-mx-4">
                        <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 light:text-white light:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <h1 class="text-xl font-medium text-gray-700 capitalize light:text-white">Role-Based Access Control</h1>
                            <p class="mt-3 text-gray-500 light:text-gray-300">
                                Ensures that users have appropriate access levels based on their roles.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 border rounded-xl border-r-gray-200 light:border-gray-700">
                    <div class="md:flex md:items-start md:-mx-4">
                        <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 light:text-white light:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <h1 class="text-xl font-medium text-gray-700 capitalize light:text-white">Event Management for Organizers</h1>

                            <p class="mt-3 text-gray-500 light:text-gray-300">
                                Enables organizers to effortlessly create, modify, or cancel events.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 border rounded-xl border-r-gray-200 light:border-gray-700">
                    <div class="md:flex md:items-start md:-mx-4">
                        <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 light:text-white light:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <h1 class="text-xl font-medium text-gray-700 capitalize light:text-white">Analytics & Feedback for Organizers</h1>

                            <p class="mt-3 text-gray-500 light:text-gray-300">
                                Provides organizers with valuable insights through analytics on event attendance and feedback.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-screen bg-white light:bg-gray-900 lg:flex" id="contact">
        <div class="flex flex-col justify-center w-full p-8 lg:bg-gray-100 lg:light:bg-gray-800 lg:px-12 xl:px-32 lg:w-1/2">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize light:text-white lg:text-3xl">Contact Us.</h1>

            <p class="mt-4 text-gray-500 light:text-gray-400">
                Get In Touch With Us We Would love
                to hear from you
            </p>
        </div>

        <div class="flex flex-col justify-center w-full p-8 pt-0 lg:w-1/2 lg:px-12 xl:px-24 ">
            <form>
                <div class="-mx-2 md:items-center md:flex">
                    <div class="flex-1 px-2">
                        <label class="block mb-2 text-sm text-gray-600 light:text-gray-200">Full Name</label>
                        <input type="text" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md light:placeholder-gray-600 light:bg-gray-900 light:text-gray-300 light:border-gray-700 focus:border-blue-400 light:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div class="flex-1 px-2 mt-4 md:mt-0">
                        <label class="block mb-2 text-sm text-gray-600 light:text-gray-200">Email address</label>
                        <input type="email" placeholder="johndoe@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md light:placeholder-gray-600 light:bg-gray-900 light:text-gray-300 light:border-gray-700 focus:border-blue-400 light:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                </div>

                <div class="w-full mt-4">
                    <label class="block mb-2 text-sm text-gray-600 light:text-gray-200">Message</label>
                    <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-56 light:placeholder-gray-600 light:bg-gray-900 light:text-gray-300 light:border-gray-700 focus:border-blue-400 light:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                </div>

                <button class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Send Message
                </button>
            </form>
        </div>
    </section>
</x-main-layout>