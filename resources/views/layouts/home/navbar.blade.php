 <header>
     <nav x-data="{ isOpen: false }" class="relative bg-white">
         <div class="container px-6 py-3 mx-auto md:flex">
             <div class="flex items-center justify-between">
                 <a href="#">
                     <span class="sr-only">TaarifaBoard</span>
                     <x-application-logo class="block h-7 w-auto fill-current text-gray-800 light:text-gray-200" />
                 </a>

                 <div class="flex lg:hidden">
                     <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 light:text-gray-200 hover:text-gray-600 light:hover:text-gray-400 focus:outline-none focus:text-gray-600 light:focus:text-gray-400" aria-label="toggle menu">
                         <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                         </svg>

                         <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                         </svg>
                     </button>
                 </div>
             </div>

             <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white light:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
                 <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10 md:py-0">
                     <a href="{{ url('/') }}" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg light:text-gray-200 hover:bg-gray-100 light:hover:bg-gray-700 md:mx-2">Home</a>
                     <a href="#features" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg light:text-gray-200 hover:bg-gray-100 light:hover:bg-gray-700 md:mx-2">Features</a>
                     <a href="#about" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg light:text-gray-200 hover:bg-gray-100 light:hover:bg-gray-700 md:mx-2">About</a>
                     <a href="#contact" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg light:text-gray-200 hover:bg-gray-100 light:hover:bg-gray-700 md:mx-2">Contact</a>
                 </div>

                 <div class="relative mt-4 md:mt-0 justify-center md:block">
                     @if (Route::has('login'))
                        <div class="hidden md:flex md:items-center md:space-x-6">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 light:text-gray-400 light:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-base font-medium text-blue hover:text-gray-300"> Log in </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-600">Create an Account</a>
                                @endif
                            @endauth
                        </div>
                     @endif
                 </div>
             </div>
         </div>
     </nav>
 </header>