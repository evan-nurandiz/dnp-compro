@extends('web.layout.header')

@section('content')
<section>
    <div>
        <video class="w-full" autoplay muted loop>
            <source src="{{url('/vidio/animation_home.m4v')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute hidden md:top-[350px] lg:top-[650px] mx-auto left-[50%] md:block pointer">
            <svg class="w-6 h-12 text-[#eec107] hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1v12m0 0 4-4m-4 4L1 9"/>
            </svg>
        </div>
    </div>
    <div class="max-w-screen-lg mx-auto">
        <div class="mb-24 px-4 md:px-0">
            <p class="text-[#fafafa] font-extralight text-[30px] lg:text-[38px] mb-8">
                A Multidisciplinary Creative <br class="hidden md:block"> Consulting Stop Agency 
                <br> dedicated to make your brand <span class="text-[#fccc16] font-black" id="word">Meaningful</span>
            </p>
            <div class="flex gap-2 items-center">
                <p class="text-[#eec107] text-[22px]">let's get creative</p>
                <svg class="w-4 h-4 text-[#eec107]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </div>
        </div>
        <div class="mb-48 px-4 lg:px-0">
            <a href="/work/slug" class="grid grid-cols-1 gap-8 md:grid-cols-2 justify-between md:gap-18 lg:gap-24 md:mb-24 cursor-pointer">
                <div class="col-span-1">
                    <img src="{{url('/images/work_example_1.png')}}" alt="" class="mb-4">
                    <p class="text-[24px] text-[#fafafa] mb-1">Identity</p>
                    <p class="text-[16px] text-[#adadac] mb-4">Project of recognition</p>
                </div>
                <div class="col-span-1">
                    <img src="{{url('/images/work_example_2.png')}}" alt="" class="mb-4">
                    <p class="text-[24px] text-[#fafafa] mb-1">One</p>
                    <p class="text-[16px] text-[#adadac] mb-4">Arts x Politics</p>
                </div>
            </a>
            <div>
                <img src="{{url('/images/work_example_landscape_1.png')}}" alt="" class="mb-4">
                <p class="text-[24px] text-[#fafafa] mb-1">Cocomas Terrace</p>
                <p class="text-[16px] text-[#adadac] mb-4">Food & Beverages</p>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 justify-between md:gap-24 mb-24">
                <div class="col-span-1">
                    <img src="{{url('/images/work_example_3.png')}}" alt="" class="mb-4">
                    <p class="text-[24px] text-[#fafafa] mb-1">Identity</p>
                    <p class="text-[16px] text-[#adadac] mb-4">Project of recognition</p>
                </div>
                <div class="col-span-1 flex gap-2 items-center">
                    <p class="text-[#eec107]">let's get creative</p>
                    <svg class="w-4 h-4 text-[#eec107]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="px-4 md:px-0">
            <p class="text-[24px] font-semibold mb-8 text-[#fafafa] md:mb-48">Journal</p>
            <div class="mb-12">
                <x-BlogCard/>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function () {
        count = 0;
        wordsArray = ["matter", "meaningful", "well known", "soulful", "captivating"];
        setInterval(function () {
            count++;
            $("#word").fadeOut(10, function () {
            $(this).text(wordsArray[count % wordsArray.length]).fadeIn(10);
            });
        }, 2000);
    });
</script>
@endsection