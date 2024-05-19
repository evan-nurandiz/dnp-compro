@extends('web.layout.header')

@section('title')
<title>DevinPartners | Creative Studio</title>
@endsection('title')

@section('head-script')
<link rel="stylesheet" href="{{url('/css/style.css')}}"/>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
@endsection('head-script')

@section('content')
<section>
    <div>
        <div class="hidden md:hidden lg:flex pt-[72px] px-[48px] justify-between">
            <p class="self-end text-white text-[14px]">copyright © 2024 d&p. All rights reserved. <br> Creative Property of d&p</p>
            <p class="text-[64px] font-[300] text-[white]">CREATIVE <br> CONSULTING STOP SERVICE</p>
        </div>
        <div class="block lg:hidden pt-[72px] px-[48px] justify-between">
            <p class="text-center text-[28px] text-[white] font-[300] mb-[30px]">Creative agency</p>
            <p class="text-center text-[14px] text-white mb-[30px]">A Multidisciplinary Creative Consulting Stop Agency dedicated to make your brand meaningful, captivating, soulful, matter, well known</p>
            <div class="mt-[12px]">
                <p class="text-center text-white text-[12px]">copyright © 2024 d&p. All rights reserved. <br> Creative Property of d&p</p>
            </div>
        </div>
        <div class="mt-[38px] flex justify-center">
            <img src="{{url('/icon/logo-big.svg')}}" alt="">
        </div>
        <div class="h-full -mt-[200px] lg:w-[890px] lg:-mt-[275px] pt-[32px] pb-[36px] mx-auto bg-gray-300 rounded-md bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-30 border-[1px] border-[#FFFFFF4D]">
            <p class="hidden lg:block text-center text-[32px] text-[white] font-[300] mb-[30px]">Creative agency</p>
            <p class="hidden lg:block px-[114px] text-center text-[14px] text-white mb-[30px]">A Multidisciplinary Creative Consulting Stop Agency dedicated to make your brand meaningful, captivating, soulful, matter, well known</p>
            <video class="w-[75%] lg:w-[520px] mx-auto" autoplay muted loop>
                <source src="{{url('/vidio/animation_home.m4v')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="mt-[32px] mb-[97px] relative">
        <img src="{{url('/icon/hand-with-card.svg')}}" alt="" class="w-full">
        <div class="px-[48px] top-[70px] absolute">
            <p class="text-[#FFCE27] text-[32px] mb-[33px] text-center lg:text-left">The story</p>
            <p class="text-[#FFFFFF] text-[14px] max-w-[495px]">
                Devin & Partners believe to provide a one stop solution service and maximize the deliverables of every aspect required.
                So then we created 7 Sub-Brands with 7 teams of expertise in every Sub-Brands to provide the best quality provided.
                From the core to it’s deliveries, we are connecting the dots of ideas to give the audience a unique experiences towards every projects. </p>
        </div>
        <div class="hidden lg:block absolute bottom-[20px] w-full">
            <div class="lg:mx-[160px] mb-[60px]">
                <p class="text-[#FFCE27] text-[32px] text-center">Sub-brands</p>
            </div>
            <div class="grid grid-cols-7 items-center lg:mx-[160px]">
                <div class="mx-auto">
                    <img src="{{url('/icon/Group.svg')}}" alt="">
                </div>
                <div class="mx-auto">
                    <img src="{{url('/icon/Group-7.svg')}}" alt="">
                </div>
                <div class="mx-auto">
                    <img src="{{url('/icon/diurnal.svg')}}" alt="">
                </div>
                <div class="mx-auto">
                    <img src="{{url('/icon/Group-1.svg')}}" alt="">
                </div>
                <div class="">
                    <img src="{{url('/icon/Group-2.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="mx-auto">
                    <img src="{{url('/icon/Group-3.svg')}}" alt="">
                </div>
                <div class="mx-auto">
                    <img src="{{url('/icon/Group-4.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="px-[48px]">
        <div class="grid grid-cols-10">
            <div class="col-span-10 lg:col-span-2 w-[50%]">
                <p class="text-[#FFCE27] text-[32px] mb-[33px] font-[300]">Our Work</p>
                <div class="hidden lg:flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px]">
                    <p class="text-[14px]">More works</p>
                    <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                </div>
            </div>
            <div class="col-span-10 lg:col-span-8 gap-[31px] grid grid-cols-3">
                <div class="col-span-10 lg:col-span-1">
                    <img src="{{url('/icon/work-1.png')}}" alt="" class="w-full">
                    <div class="flex justify-between mt-[21px]">
                        <p class="text-[14px] text-[#FFCE27] font-[300]">Cocomas terrace</p>
                        <div class="text-right">
                            <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                            <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 lg:col-span-1">
                    <img src="{{url('/icon/work-2.png')}}" alt="" class="w-full">
                    <div class="flex justify-between mt-[21px]">
                        <p class="text-[14px] text-[#FFCE27] font-[300]">Cocomas terrace</p>
                        <div class="text-right">
                            <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                            <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 lg:col-span-1">
                    <img src="{{url('/icon/work-3.png')}}" alt="" class="w-full">
                    <div class="flex justify-between mt-[21px]">
                        <p class="text-[14px] text-[#FFCE27] font-[300]">Cocomas terrace</p>
                        <div class="text-right">
                            <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                            <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] flex mt-[18px] lg:hidden w-[42.5%] mx-auto lg:mt-0">
            <p class="text-[14px]">More works</p>
            <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
        </div>
    </div>
    <div class="relative">
        <img src="{{url('/icon/image-back.svg')}}" alt="" class="w-full">
        <div class="absolute w-full top-[70px] lg:top-[150px]">
            <div class="block lg:flex px-[48px]">
                <p class="block lg:hidden text-[#FFCE27] text-[24px] font-[300] text-center mb-[24px] lg:mb-0">Latest Journal</p>
                <img src="{{url('/icon/journal.png')}}" alt="">
                <div class="lg:pl-[51px] w-full flex-col">
                    <div class="hidden lg:flex justify-between w-full items-center h-[33%] self-start">
                        <p class="text-[#FFCE27] text-[24px] font-[300] self-start ">Latest Journal</p>
                        <div class="px-[10px] py-[8px] flex bg-white items-center gap-[10px] rounded-[32px] self-start ">
                            <p class="text-[14px]">More works</p>
                            <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                        </div>
                    </div>
                    <div class="h-[33%] mt-[24px] lg:mt-0">
                        <div class="flex gap-[16px] mb-[24px]">
                            <div class="px-[10px] py-[8px] flex bg-[#FFCE27] items-center gap-[10px] rounded-[32px]">
                                <p class="text-[14px]">Economy</p>
                            </div>
                            <p class="text-white text-[14px] font-[300] self-center">5 Min Read</p>
                        </div>
                        <p class="text-white text-[30px] font-[300] self-center">Your passport to the web3 economy</p>
                    </div>
                    <div class="flex mt-[24px] lg:mt-0 gap-[22px] h-[33%]">
                        <div class="w-[16px] h-[16px] bg-[#FFCE27] self-end"></div>
                        <div class="w-[16px] h-[16px] bg-white self-end"></div>
                        <div class="w-[16px] h-[16px] bg-white self-end"></div>
                    </div>
                </div>
            </div>
            <div class="w-[90%] lg:w-[866.7px] mx-auto mt-[100px] lg:mt-[198px] h-[350px] lg:h-[600px] px-0 lg:px-[48px]">
                <div class="hub-slider">
                    <div class="hub-slider-slides">
                        <ul>
                            <li class="w-[100%] h-[370px] lg:h-[558px] p-[28px] lg:p-[75px] bg-white-300 rounded-md 
                            bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-30">
                                <p class="text-[32px] lg:text-[64px] text-start text-[#1A1A1A] font-[300]">Creative Consultation <br> Strategy / Enabler</p>
                                <div class="grid grid-cols-8">
                                    <div class="col">

                                    </div>
                                </div>
                            </li>
                            <li class="w-[100%] h-[370px] lg:h-[558px]"></li>
                            <li class="w-[100%] h-[370px] lg:h-[558px]"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:w-[423px] mx-auto mt-[73.86px] px-[48px]">
                <p class="text-center text-[14px] text-white">A Multidisciplinary Creative Consulting Stop Agency dedicated to make your brand meaningful, captivating, soulful, matter, well known</p>
            </div>
            <div class="bg-[#FFCE27] pt-[52px] pb-[37px] mt-[87px]">
                <div class="grid grid-cols-3 items-center" >
                    <div class="col-span-3 lg:col-span-1 text-center lg:text-left">
                        <p class="text-[86px] lg:text-[108px] text-white font-[300]">studioHQ</p>
                    </div>
                    <div class="col-span-3 lg:col-span-1 text-center">
                        <p class="text-[72px] lg:text-[96px] text-white font-[300]">studio^2</p>
                    </div>
                    <div class="col-span-3 lg:col-span-1 text-center lg:text-right">
                        <p class="text-[72px] lg:text-[98px] text-white font-[300]">studio^3</p>
                    </div>
                </div>
                <div class="px-[48px] mt-[24px] lg:mt-0">
                    <p class="text-[24px] font-[300]">Neo Soho Lt 32 Unit 3220 <br> West Jakarta <br> 11470</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block lg:mt-[55px] pl-[158px] pr-[162px]">
        <div class="bg-[#72727240] rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-20 py-[32px]">
            <p class="text-[60px] text-white font-[300] text-center">Let’s talk</p>
            <div class="pl-[112px] pr-[108px]">
                <div class="flex gap-[40px] mt-[21px]">
                    <div class="bg-[#1A1A1A] px-[40px] py-[24px] w-full rounded-[8px]">
                        <p class="text-[#FFFFFF] text-[14px] font-[300]">Full Name</p>
                        <input
                        class="pb-[6px] border-b-[1px] border-b-[#333333] bg-[#1A1A1A] mt-[20px] w-full text-white"
                        placeholder="Type here" />
                    </div>
                    <div class="bg-[#1A1A1A] px-[40px] py-[24px] w-full rounded-[8px]">
                        <p class="text-[#FFFFFF] text-[14px] font-[300]">Email</p>
                        <input
                        class="pb-[6px] border-b-[1px] border-b-[#333333] bg-[#1A1A1A] mt-[20px] w-full text-white"
                        placeholder="Type here" />
                    </div>
                </div>
                <div class="bg-[#1A1A1A] px-[40px] py-[24px] w-full mt-[26px] rounded-[8px]">
                    <p class="text-[#FFFFFF] text-[14px] font-[300]">Your Message</p>
                    <input
                    class="pb-[6px] border-b-[1px] border-b-[#333333] bg-[#1A1A1A] mt-[20px] w-full text-white"
                    placeholder="Type here" />
                </div>
            </div>
            <div class="mx-auto w-[72px] mt-[32px]">
                <div class="px-[12px] py-[10px] bg-[#FFCE27] rounded-[24px]">
                    <p class="font-[500] text-[14px] text-[#1A1A1A]">Submit</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script type="text/javascript" src="{{url('/js/hubslider.js')}}"></script>
<script type="text/javascript">
    $(function () {
    $('.hub-slider-slides ul').hubSlider({
        selector: $('li'),
        button: {
            next: $('.hub-slider-arrow_next'),
            prev: $('.hub-slider-arrow_prev')
        },
        transition: '30.7s',
        startOffset: 30,
        auto: true,
        time: 2 // secondly
    });
    })
</script>
@endsection