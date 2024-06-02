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
                <a href="/work">
                    <div class="text-[48px] text-[#FFCE27]  mb-[48px]">our work</div>
                </a>
                <a href="about-us">
                    <div class="text-[48px] text-[#FFCE27]  mb-[48px]">about us</div>
                </a>
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">the teams</div>
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">journal</div>
                <div class="text-[48px] text-[#FFCE27]  mb-[48px]">let’s talk</div>
            </div>
        </div>
        <body class="antialiased bg-[#1A1A1A] min-h-screen">
            @yield('content')
        </body>
        <footer>
            <div class="block md:flex justify-between mt-[1428px] md:mt-[948px] lg:mt-[48px] mb-[55px] px-[48px]">
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
