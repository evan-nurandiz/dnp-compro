@extends('web.layout.header')

@section('title')
<title>Work | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
    <div>
        <img src="{{url('images/work-background.png')}}" alt="" class="w-full">
        <div class="pl-[24px] pr-[24px] md:pl-[48px] md:pr-[60px] -mt-[80px] md:-mt-0">
            <div class="md:flex md:justify-between md:items-center lg:-mt-[650px] lg:mb-[110px] mb-[40px]">
                <p class="text-[48px] text-[#FFCE27] font-[300] text-center md:text-left">Our work</p>
                <p class="text-[17px] text-[#FFFFFF] font-[300]">A Multidisciplinary Creative Consulting Stop Agency</p>
            </div>
            <div class="grid grid-cols-10 md:grid-cols-4 mb-[108px]">
                <div class="col-span-10 md:col-span-1 mb-[28px] md:mb-0">
                    <img src="{{url('/icon/Group.svg')}}" alt="" class="mx-auto md:mx-0">
                    <div class="flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[30%] mt-[31px] mx-auto md:mx-0">
                        <p class="text-[14px] text-[#1A1A1A]">See All</p>
                        <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                    </div>
                </div>
                <div class="md:col-span-3 col-span-10 grid grid-cols-10 md:grid-cols-3 gap-[31px]">
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-6.png')}}" alt="" class="w-full">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-5.png')}}" alt="" class="w-full">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-4.png')}}" alt="" class="w-full">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-10 md:grid-cols-4 mb-[108px]">
                <div class="col-span-10 md:col-span-1 mb-[28px] md:mb-0">
                    <img src="{{url('/icon/Group-7.svg')}}" alt="" class="mx-auto md:mx-0">
                    <div class="flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[30%] mt-[31px] mx-auto md:mx-0">
                        <p class="text-[14px] text-[#1A1A1A]">See All</p>
                        <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                    </div>
                </div>
                <div class="md:col-span-3 col-span-10 grid grid-cols-10 md:grid-cols-3 gap-[31px]">
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-6.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-5.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-4.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-10 md:grid-cols-4 mb-[108px]">
                <div class="col-span-10 md:col-span-1 mb-[28px] md:mb-0">
                    <img src="{{url('/icon/diurnal.svg')}}" alt="" class="mx-auto md:mx-0">
                    <div class="flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[30%] mt-[31px] mx-auto md:mx-0">
                        <p class="text-[14px] text-[#1A1A1A]">See All</p>
                        <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                    </div>
                </div>
                <div class="md:col-span-3 col-span-10 grid grid-cols-10 md:grid-cols-3 gap-[31px]">
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-6.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-5.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-4.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-10 md:grid-cols-4 mb-[108px]">
                <div class="col-span-10 md:col-span-1 mb-[28px] md:mb-0">
                    <img src="{{url('/icon/Group-1.svg')}}" alt="" class="mx-auto md:mx-0">
                    <div class="flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[30%] mt-[31px] mx-auto md:mx-0">
                        <p class="text-[14px] text-[#1A1A1A]">See All</p>
                        <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                    </div>
                </div>
                <div class="md:col-span-3 col-span-10 grid grid-cols-10 md:grid-cols-3 gap-[31px]">
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-6.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-5.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-4.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-10 md:grid-cols-4 mb-[108px]">
                <div class="col-span-10 md:col-span-1 mb-[28px] md:mb-0">
                    <img src="{{url('/icon/Group-2.svg')}}" alt="" class="mx-auto md:mx-0">
                    <div class="flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[30%] mt-[31px] mx-auto md:mx-0">
                        <p class="text-[14px] text-[#1A1A1A]">See All</p>
                        <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                    </div>
                </div>
                <div class="md:col-span-3 col-span-10 grid grid-cols-10 md:grid-cols-3 gap-[31px]">
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-6.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-5.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-4.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-10 md:grid-cols-4 mb-[108px]">
                <div class="col-span-10 md:col-span-1 mb-[28px] md:mb-0">
                    <img src="{{url('/icon/Group-3.svg')}}" alt="" class="mx-auto md:mx-0">
                    <div class="flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[30%] mt-[31px] mx-auto md:mx-0">
                        <p class="text-[14px] text-[#1A1A1A]">See All</p>
                        <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                    </div>
                </div>
                <div class="md:col-span-3 col-span-10 grid grid-cols-10 md:grid-cols-3 gap-[31px]">
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-6.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-5.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-4.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-10 md:grid-cols-4 mb-[108px]">
                <div class="col-span-10 md:col-span-1 mb-[28px] md:mb-0">
                    <img src="{{url('/icon/Group-4.svg')}}" alt="" class="mx-auto md:mx-0">
                    <div class="flex px-[10px] py-[8px] bg-white items-center gap-[10px] rounded-[32px] w-[30%] mt-[31px] mx-auto md:mx-0">
                        <p class="text-[14px] text-[#1A1A1A]">See All</p>
                        <img src="{{url('/icon/Chevron-Down.svg')}}" alt="" class="cursor-pointer">
                    </div>
                </div>
                <div class="md:col-span-3 col-span-10 grid grid-cols-10 md:grid-cols-3 gap-[31px]">
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-6.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-5.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-1">
                        <img src="{{url('images/work-example-4.png')}}" alt="">
                        <div class="flex justify-between mt-[21px]">
                            <p class="text-[14px] font-[300] text-[#FFCE27]">Cocomas terrace</p>
                            <div class="text-right">
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">2023</p>
                                <p class="text-[10px] font-[300] text-[#FFFFFF]">Food & Beverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</section>
@endsection('content')

@section('script')
<script>
    let ENDPOINT = "{{ url('/') }}";
    let page = "{{$current_page}}";
    let nextPageUrl;
    
    page = parseInt(page,10) + 1;
    function infinteLoadMore() {
        $.ajax({
            url: ENDPOINT + "/work?page=" + page,
            datatype: "html",
            type: "get"
        })
        .done(function (response) {
            nextPageUrl = response.projects.next_page_url;

            if (!nextPageUrl) {
                document.getElementById('next-page').classList.add('hidden');
            }

            page++
            $("#work-wrapper").append(response.html);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.error('Server error occured');
        });
    }
    
</script>
@endsection('script')