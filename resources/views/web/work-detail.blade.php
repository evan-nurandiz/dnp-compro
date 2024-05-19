@extends('web.layout.header')

@section('title')
<title>Devin&Partners</title>
@endsection('title')

@section('content')
<section>
    <div>
        <img src="{{url('images/work-background.png')}}" alt="">
        <div class="pl-[16px] pr-[16px] lg:pl-[48px] lg:pr-[60px]">
            <div class="flex justify-between items-center -mt-[100px] md:-mt-[250px] mb-[64px] lg:-mt-[650px] lg:mb-[110px]">
                <p class="text-[32px] md:text-[40px] lg:text-[48px] text-[#FFCE27] font-[300]">Setiket</p>
                <p class="text-[12px] md:text-[16px] lg:text-[18px] text-[#A3A3A3] font-[300]">Back to Our work</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-[48px] lg:gap-[98px]">
                <img src="{{url('images/work-detail-1.png')}}" alt="" class="col-span-1">
                <div class="pr-0 lg:pr-[94px] col-span-1">
                    <img src="{{url('images/work-detail-2.png')}}" alt="">
                    <p class="mt-[64px] lg:mt-[107px] text-[14px] text-white text-justify leading-[22.4px] font-[400]">
                        IMI is an organisation appointed by the government to regulate and offer recommendations in road safety and automotive sports
                        competition.
                            The digital platform acts as IMI
                        enabler to provide the best service that can be offered through membership in the automotive sector. From automotive sport enthusiasts and racers and also for the people who
                        constantly commute (mobilize) on a day to day basis.
                        Gaspol’s vission is to provide the best and complete service for all automotive sport and mobility needs in Indonesia.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[20px] mt-[99px]">
                <img src="{{url('images/work-detail-image-1.png')}}" alt="" class="col-span-1">
                <img src="{{url('images/work-detail-image-2.png')}}" alt="" class="col-span-1">
                <img src="{{url('images/work-detail-image-3.png')}}" alt="" class="col-span-1">
            </div>
            <div class="block md:flex justify-between items-center mt-[64px] mb-[32px] lg:mt-[100px] lg:mb-[110px]">
                <p class="text-[32px] lg:text-[48px] text-[#FFCE27] font-[300] text-center lg:text-left">Explore our work</p>
                <div class="px-[24px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[40%] md:w-[20%] lg:w-[11%] 
                mt-[31px] md:mt-[0px] cursor-pointer mx-auto md:mx-0 lg:mx-0">
                    <p class="text-[14px] text-[#1A1A1A]">View All Works</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[20.1px]">
                <div class="col-span-1">
                    <img src="{{url('images/work_example_1.png')}}" alt="">
                    <div class="flex justify-between mt-[21px]">
                        <p class="md:text-[14px] text-[21px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                        <div class="text-right">
                            <p class="text-[13px] md:text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                            <p class="text-[13px] md:text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <img src="{{url('images/work_example_2.png')}}" alt="">
                    <div class="flex justify-between mt-[21px]">
                        <p class="md:text-[14px] text-[21px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                        <div class="text-right">
                            <p class="text-[13px] md:text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                            <p class="text-[13px] md:text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <img src="{{url('images/work_example_1.png')}}" alt="">
                    <div class="flex justify-between mt-[21px]">
                        <p class="md:text-[14px] text-[21px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                        <div class="text-right">
                            <p class="text-[13px] md:text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                            <p class="text-[13px] md:text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#FFCE27] pt-[52px] pb-[37px] mt-[87px]">
            <div>
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
        <div class="block lg:mt-[55px] lg:pl-[158px] lg:pr-[162px]">
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
    </div>
</section>
@endsection('content')