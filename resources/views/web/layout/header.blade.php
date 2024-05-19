<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')
        <link rel="icon" type="image/x-icon" href="{{url('/icon/main-logo.ico')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @yield('head-script')

        @vite('resources/css/app.css')
    </head>
    <div class="relative">
        <nav class="bg-transparent top-0 fixed w-full z-30">
            <div class="hidden py-6 px-[48px] flex-wrap items-center justify-between mx-auto px-4 md:pt-[21px] md:pb-[8px] md:flex">
                <a href="/">
                    <img src="{{url('/icon/dnp-icon-v2.svg')}}" alt="" class="md:w-[86p×] md:h-[41px] cursor-pointer">
                </a>
                <button onclick="openHiddenBar()">
                    <img src="{{url('/icon/header-icon.svg')}}" alt="" 
                    class="cursor-pointer">
                </button>
                <div class="px-[12px] py-[10px] flex bg-white items-center gap-[10px] rounded-[32px]">
                    <div class="w-[8px] h-[8px] rounded-full bg-[#FFCE27]"></div>
                    <p>Let’s talk</p>
                </div>
                <!-- <img data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" 
                src="{{url('/icon/hamburger-logo.png')}}" alt="" class="md:h-[32p×] md:w-[26px] cursor-pointer" onclick="onClickSideBar()"> -->
            </div>
            <div class="flex py-6 max-w-screen-lg flex-wrap items-center justify-between mx-auto px-4 md:py-12 md:hidden">
                <a href="/">
                    <img src="{{url('/icon/dnp-icon-v2.svg')}}" alt="" class="w-[66px] h-[31px] cursor-pointer">
                </a>
                <img onclick="openHiddenBar()"
                 type="button"  src="{{url('/icon/hamburger-logo.png')}}" alt="" class="w-[31px] h-[21px] cursor-pointer">
            </div>
        </nav>
        <div id="hidden-bar" class="h-screen w-full bg-[#72727240] 
        bg-clip-padding backdrop-filter 
        backdrop-blur-sm bg-opacity-[25%] 
        fixed top-0 z-50 transition-transform -translate-y-full">
            <div class="columns-1 w-full text-center">
                <img src="{{url('/icon/close.svg')}}" alt="" class="mx-auto my-[16px]" onclick="openHiddenBar()">
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">our work</div>
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">about us</div>
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">the teams</div>
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">journal</div>
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">let’s talk</div>
            </div>
        </div>
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
            <div class="flex justify-between lg:mt-[48px] mb-[55px] px-[48px]">
                <div class="col-span-1">
                    <p class="text-[14px] text-white font-[300]">+62 21 1234567</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[14px] text-white font-[300]">FACEBOOK        X        INSTAGRAM       LINKEDIN</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[14px] text-white font-[300]">+62 21 1234567</p>
                </div>
            </div>
        </footer>
    </div>

    @yield('script')
    <script>
        const openHiddenBar = () => {
            console.log('hitt', document.getElementById("hidden-bar").classList.contains("hidden"))
            if (document.getElementById("hidden-bar").classList.contains("-translate-y-full")) {
                document.getElementById("hidden-bar").classList.remove("-translate-y-full")
                document.getElementById("hidden-bar").classList.add("translate-y-0")
            } else {
                document.getElementById("hidden-bar").classList.add("-translate-y-full")
                document.getElementById("hidden-bar").classList.remove("translate-y-0")

            }
        }
    </script>
</html>
