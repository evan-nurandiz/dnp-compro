@extends('web.layout.header')

@section('title')
<title>Work | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
    <div>
        <img src="{{url('images/work-background.png')}}" alt="">
        <div class="pl-[24px] pr-[24px] md:pl-[48px] md:pr-[60px] -mt-[180px] md:-mt-[270px] lg:-mt-0 mb-[150px]">
            <div class="md:flex md:justify-between tems-start lg:-mt-[650px] lg:mb-[110px] mb-[40px]">
                <p class="text-[48px] text-[#FFCE27] font-[300] text-center md:text-left md:mr-[300px] lg:mr-[618px]">Journal</p>
            </div>
            <div class="flex w-full">
                <div class="block lg:flex p-[22px] bg-gradient-to-r from-[#212028B3] to-[#1C1928B3]">
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
                        <div class="flex mt-[24px] lg:mt-0 gap-[22px] h-[33%] justify-center md:justify-start">
                            <div class="w-[16px] h-[16px] bg-[#FFCE27] self-end"></div>
                            <div class="w-[16px] h-[16px] bg-white self-end"></div>
                            <div class="w-[16px] h-[16px] bg-white self-end"></div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-[32px] text-[#FFCE27] font-[300] text-center mt-[50px] mb-[80px]">Others</p>
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-[20px]">
                @foreach($blogs as $blog)
                    <div class="col-span-3 md:col-span-2 lg:col-span-1 mb-[69px]">
                        <img src="{{url('images/'.$blog)}}" alt="" class="w-full">
                        <div class="flex justify-between items-center mt-[21px] mb-[31px]">
                            <p class="text-[21px] text-[#FFCE27] font-[400] text-center">Name</p>
                            <div>
                                <p class="text-[13px] text-[#FFFFFF] font-[400] text-right">2021</p>
                                <p class="text-[13px] text-[#FFFFFF] font-[400] text-right">Minutes</p>
                            </div>
                        </div>
                        <p class="text-[17px] text-[#FFFFFF] font-[300] text-justify">
                            Make it more corporate please put a record on and see who dances, yet disband the squad but rehydrate as needed out of scope, and groom the backlog, and this is not the hill i want to die on we need to get the vernacular right.
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection('content')

@section('script')
<script>
    const openModal = (e) => {
        const modalDiv = document.getElementById("modal")
        const bgModalDiv = document.getElementById("modal-bg")
        if (modalDiv.classList.contains("hidden")) {
            modalDiv.classList.remove("hidden")
            bgModalDiv.classList.remove("hidden")
        } else {
            modalDiv.classList.add("hidden")
            bgModalDiv.classList.add("hidden")
        }
    }

    const bgAction = () => {
        const modalDiv = document.getElementById("modal")
        const bgModalDiv = document.getElementById("modal-bg")
        console.log('thi')
        if (!modalDiv.classList.contains("hidden")) {
            modalDiv.classList.add("hidden")
            bgModalDiv.classList.add("hidden")
        }
    }
</script>
@endsection('script')
