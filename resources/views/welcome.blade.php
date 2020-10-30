<x-guest-layout>
    <div class="relative bg-gray-50">
        <div class="relative bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                    <div class="w-0 flex-1 flex">
                        <svg class="w-12 h-12 text-indigo-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold leading-7 text-gray-800 sm:leading-9 sm:truncate">
                        Happy Little Checklist
                    </h1>
                    <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">
                        <a href="{{ route('login') }}" class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:text-gray-900 transition ease-in-out duration-150">
                            Login
                        </a>
                        <span class="inline-flex rounded-md shadow-sm">
                            <a href="{{ route('register') }}" class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                              Register
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <main class="lg:relative">
            <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
                <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                    <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-800 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                        Checklists that power
                        <br class="xl:hidden">
                        <span class="text-indigo-600">your repeating tasks</span>
                    </h2>
                    <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                        Happy Little Checklist gets the job done right.
                    </p>
                    <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Register
                            </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
                <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="Woman on her phone">
            </div>
        </main>
    </div>
</x-guest-layout>
