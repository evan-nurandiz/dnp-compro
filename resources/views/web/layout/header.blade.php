<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevinPartners | Creative Studio</title>
        <link rel="icon" type="image/x-icon" href="{{url('/icon/main-logo.ico')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <div class="relative">
        <nav class="bg-transparent top-0 fixed w-full">
            <div data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" 
            class="hidden py-6 max-w-screen-lg flex-wrap items-center justify-between mx-auto px-4 md:py-12 md:flex">
                <img src="{{url('/icon/main-logo.png')}}" alt="" class="md:w-[86p×] md:h-[41px] cursor-pointer">
                <img src="{{url('/icon/hamburger-logo.png')}}" alt="" class="md:h-[32p×] md:w-[26px] cursor-pointer">
            </div>
            <div class="flex py-6 max-w-screen-lg flex-wrap items-center justify-between mx-auto px-4 md:py-12 md:hidden">
                <img src="{{url('/icon/main-logo.png')}}" alt="" class="w-[66px] h-[31px] cursor-pointer">
                <img src="{{url('/icon/hamburger-logo.png')}}" alt="" class="w-[31px] h-[21px] cursor-pointer">
            </div>
        </nav>
        <aside id="default-sidebar" class="fixed hidden top-0 right-0 z-40 lg:w-[642px] h-[100%] transition-transform -translate-x-full lg:translate-x-0" aria-label="Sidebar">
            <div class="h-full pl-6 pr-12 py-4 overflow-y-auto bg-[#ffcf06] py-[66px]">
                <svg class="w-[35px] h-[35px] text-black ml-auto cursor-pointer	" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.6" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <div class="grid grid-cols-2 mt-6">
                    <div class="col-span-1">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1">
                                <a href="{{url('admin-cms-project-list')}}" class="text-[38px] font-bold">Work</a>
                            </div>
                            <div class="col-span-1">
                                <a href="" class="text-[38px] font-bold">Journal</a>
                            </div>
                            <div class="col-span-1">
                                <a href="" class="text-[38px] font-bold">Family</a>
                            </div>
                            <div class="col-span-1">
                                <a href="" class="text-[38px] font-bold">About Us</a>
                            </div>
                            <div class="col-span-1">
                                <a href="" class="text-[38px] font-bold">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <!-- <img src="{{url('/images/pattern-side-bar.png')}}" alt="" class="h-full"> -->
                    </div>
                </div>
            </div>
        </aside>
        <body class="antialiased bg-[#1A1A1A] min-h-screen">
            @if(session()->has('status'))
                @if (session()->get('status') == 'success')
                <div id="toast-success" class=" absolute left-[45%] top-[20px] z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow shadow animate-bounce" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">{{ session()->get('message') }}</div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                @elseif (session()->get('status') == 'fail')
                <div id="toast-danger" class=" absolute left-[45%] top-[20px] flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow shadow animate-bounce" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                        </svg>
                        <span class="sr-only">Error icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">{{ session()->get('message') }}</div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                @endif
            @endif
            @yield('content')
        </body>
        <footer>
            <div class="grid grid-cols-10 px-4 md:px-12 md:mt-12">
                <div class="col-span-5 hidden md:block md:mt-8 md:col-span-3">
                    <p class="text-[#4b4b4a] text-[22px] font-semibold mb-24">
                        Contact us, let's discuss <br> about how we can help <br> your business growth !
                    </p>
                    <p class="text-[#605E5E] text-[15px] font-extralight mb-6">@ {{ Carbon\Carbon::now()->format('Y')  }} by devin&partners.</p>
                </div>
                <div class="grid grid-cols-10 md:grid-cols-3 col-span-4">
                    <div class="col-span-10 md:col-span-1">
                        <p class="text-[#5e5e5e] text-[15px] font-bold mb-4">Contact</p>
                        <p class="text-[#f1c719] text-[15px] font-bold mb-6">info@devinpartners.com</p>
                        <p class="text-[#f1c719] text-[15px] font-bold">+62817172626</p>
                        <p class="text-[#f1c719] text-[15px] font-bold">+628817172626</p>
                    </div>
                    <div class="hidden col-span-10 md:block md:col-span-1">
                        <p class="text-[#1A1A1A] text-[15px] font-bold mb-4">Contact</p>
                        <p class="text-[#605e5e] text-[15px] font-bold mb-6">Instagram</p>
                        <p class="text-[#605e5e] text-[15px] font-bold">Facebook</p>
                        <p class="text-[#605e5e] text-[15px] font-bold">Behance</p>
                    </div>
                    <div class="hidden col-span-10 md:block col-span-10 md:col-span-1">
                        <p class="text-[#605e5e] text-[15px] font-bold mb-4">Social</p>
                    </div>
                </div>
                <div class="col-span-10 block mt-8 md:hidden">
                    <p class="text-[#4b4b4a] text-[16px] md:text-[22px] font-semibold mb-12">
                        Contact us, let's discuss about how we can help your business growth !
                    </p>
                    <p class="text-[#605E5E] text-[15px] font-extralight mb-6">@ {{ Carbon\Carbon::now()->format('Y')  }} by devin&partners.</p>
                </div>
                <div class="col-span-5 md:col-span-3"></div>
            </div>
        </footer>
    </div>
</html>
