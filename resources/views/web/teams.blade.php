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
                <p class="text-[48px] text-[#FFCE27] font-[300] text-center md:text-left md:mr-[300px] lg:mr-[618px]">Teams</p>
                <p class="text-[17px] text-[#FFFFFF] font-[300]">Make it more corporate please put a record on and see who dances, yet disband the squad but rehydrate as needed out of scope, and groom the backlog, and this is not the hill i want to die on we need to get the vernacular right.</p>
            </div>
            <div>
                <div class="mb-[60px]">
                    <p class="text-[32px] text-[#FFCE27] font-[300] text-center mb-[53px]">The Lead</p>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-[21px]">
                        @foreach($leads as $lead)
                        <div class="col-span-1 md:col-span-1" onclick="openModal(event)">
                            <img src="{{url('images/'.$lead)}}" alt="" class="w-full">
                            <div class="flex justify-between items-center mt-[21px]">
                                <p class="text-[21px] text-[#FFCE27] font-[400] text-center">Name</p>
                                <p class="text-[13px] text-[#FFFFFF] font-[400] text-center">Position</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-[60px]">
                    <p class="text-[32px] text-[#FFCE27] font-[300] text-center mb-[53px]">The Lead</p>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-[21px]">
                        @foreach($strategist as $strategis)
                        <div class="col-span-1 md:col-span-1" onclick="openModal(event)">
                            <img src="{{url('images/'.$strategis)}}" alt="" class="w-full">
                            <div class="flex justify-between items-center mt-[21px]">
                                <p class="text-[21px] text-[#FFCE27] font-[400] text-center">Name</p>
                                <p class="text-[13px] text-[#FFFFFF] font-[400] text-center">Position</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="">
                    <p class="text-[32px] text-[#FFCE27] font-[300] text-center mb-[53px]">The Lead</p>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-[21px]">
                        @foreach($designers as $designer)
                        <div class="col-span-1 md:col-span-1" onclick="openModal(event)">
                            <img src="{{url('images/'.$designer)}}" alt="" class="w-full">
                            <div class="flex justify-between items-center mt-[21px]">
                                <p class="text-[21px] text-[#FFCE27] font-[400] text-center">Name</p>
                                <p class="text-[13px] text-[#FFFFFF] font-[400] text-center">Position</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden fixed inset-0 bg-[#1A1A1A] bg-opacity-75 transition-opacity" id="modal-bg"></div>
    <div class="hidden fixed inset-0 z-10 w-screen overflow-y-auto" id="modal">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0" onclick="bgAction()">
            <div class="bg-[#72727240] px-[8px] pt-[22px] pb-[8px] w-[400px]">
                <p class="text-[21px] text-[#FFCE27] font-[400] text-left mb-[16px] px-[8px]">Kalya Merchia</p>
                <img src="{{url('images/'.$lead)}}" alt="" class="w-full mb-[10px]">
                <div class="bg-[#1A1A1A] px-[15px] py-[9px] mb-[10px]">
                    <p class="text-[14px] text-[#FFCE27] font-[400] text-left">Principal Designer @ DevinPartners</p>
                </div>
                <div class="bg-[#1A1A1A] px-[15px] py-[9px] min-h-[111px]">
                    <p class="text-[14px] text-[#FFFFFF] font-[400] text-left">Synergize productive mindfulness define the underlying principles that drive decisions and strategy for your design language tiger team.</p>
                </div>
                <div class="bg-[#1A1A1A] px-[15px] py-[9px] border-t-[0.5px] b-[#FFFFFF]">
                    <p class="text-[14px] text-[#FFCE27] font-[400] text-left">Instagram ↗</p>
                </div>
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
