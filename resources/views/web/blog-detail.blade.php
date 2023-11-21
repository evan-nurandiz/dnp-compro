@extends('web.layout.header')

@section('title')
<title>Journal | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
<div class="max-w-screen-lg mx-auto py-[160px]">
    <div class="bg-white p-4 relative">
        <div class="flex justify-between mb-10">
            <p class="text-[14px] text-[#5f5e5e] text-extraLight">All Posts</p>
        </div>
        <div class="border-[1px] p-4 border-gray-100 md:px-24 md:py-16">
            <div class="flex justify-between mb-12 items-center relative">
                <div class="flex gap-2 items-center">
                    <img src="{{url('/icon/name_icon.png')}}" alt="" class="w-[24px] h-[24px] md:w-[32px] md:h-[32px] rounded-full">
                    <div class="flex items-center gap-1">
                        <div class="flex items-center">
                            <p class="text-[#2f2e2e] text-[10px] md:text-[12px]">Devin GodFrey</p>
                            <img src="{{url('/icon/crown-icon.svg')}}" alt="">
                        </div>
                        <p class="text-[#2f2e2e] text-[10px] md:text-[12px]">• {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}} • {{$blog->read_time}}</p>
                    </div>
                </div>
                <img src="{{url('/icon/blog-more-icon.svg')}}" alt="" class="cursor-pointer" onclick="onShowTabButton()">
                <div class="absolute right-[15px] top-[30px] shadow-xl py-6 pr-4 pl-6 md:pl-8 md:pr-24 flex items-center gap-2 hidden cursor-pointer" id="share-tab-button"
                onclick="onShowModal('onShowModalMulti')">
                    <img src="{{url('/icon/share-icon-blog.svg')}}" alt="">
                    <p class="text-[14px] font-light">Share Post</p>
                </div>
            </div>
            <div class="mb-4">
                <p class="text-[28px] text-[#2f2e2e] font-light mb-6">{{$blog->blog_title}}</p>
                <p class="text-[14px] text-[#4c4c4c] font-light">Updated: {{ \Carbon\Carbon::parse($blog->updated_at)->format('M d, Y')}}</p>
            </div>
            {!! $blog->blog_body !!}
            <div class="mt-16">
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="flex gap-8">
                    <a href="https://www.facebook.com/share.php?u={{Request::url()}}" target="_blank">
                        <img src="{{url('/icon/fb-blog-share-icon.svg')}}" alt="">
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{Request::url()}}" target="_blank">
                        <img src="{{url('/icon/twitter-blog-share-icon.svg')}}" alt="">
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{Request::url()}}" target="_blank">
                        <img src="{{url('/icon/linkedin-blog-share-icon.svg')}}" alt="">
                    </a>
                    <button data-modal-target="static-modal" data-modal-toggle="static-modal" 
                    class="" type="button" onclick="onShowModal('onShowModalLink')">
                        <img src="{{url('/icon/blog-share-icon.svg')}}" alt="">
                    </button>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0">
            </div>
            <div class="flex justify-between items-center">
                <p class="text-[14px] text-[#4c4c4c] font-light">{{$blog->blog_view}} Views</p>
                <img class="w-[19px] h-[19px]" src="{{url('/icon/blog-love-icon.svg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Share modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="false" class="hidden bg-[#010101] bg-opacity-75
    overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-10 
    justify-center items-center w-full md:inset-0 h-full max-h-full flex"  id="modal-container" >
        <div class="relative p-4 w-full max-w-xl max-h-full mx-auto my-auto">
            <!-- Modal content -->
            <div class="relative bg-white shadow">
                <!-- Modal body -->
                <div class="p-4 md:py-16 md:px-16 space-y-4">
                    <div class="hidden" id="multi-share-modal">
                        <p class="text-center mb-12">Share Post</p>
                        <div class="flex justify-between">
                            <a href="https://www.facebook.com/share.php?u={{Request::url()}}" 
                            class="w-[45px] h-[45px] text-[#fffff] rounded-full bg-[#4464a3] flex items-center justify-center" target="_blank">
                                <img src="{{url('/icon/fb-blog-share-icon.svg')}}" alt="" class="text-[#fffff] fill-[#fffff]">
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{Request::url()}}" 
                            class="w-[45px] h-[45px] text-white rounded-full bg-[#55acee] flex items-center justify-center" target="_blank">
                                <img src="{{url('/icon/twitter-blog-share-icon.svg')}}" alt="" class="text-white fill-white">
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{Request::url()}}"
                            class="w-[45px] h-[45px] text-white rounded-full bg-[#0077b5] flex items-center justify-center" target="_blank"> 
                                <img src="{{url('/icon/linkedin-blog-share-icon.svg')}}" alt="" class="text-white fill-white">
                            </a>
                            <div class="w-[45px] h-[45px] rounded-full bg-[#4464a3] flex items-center justify-center cursor-pointer" onclick="onShowModal('onShowModalLinkMulti')">
                                <img src="{{url('/icon/blog-share-icon.svg')}}" alt="" class="text-white fill-white">
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="share-link-website">
                        <div class="flex gap-4 mb-6">
                            <img src="{{url('/icon/blog-share-icon.svg')}}" alt="">
                            <p>Share Link</p>
                        </div>
                        <div class="overflow-x-auto p-4 border-gray-200 border-[0.5px] mb-8">
                            <p class="text-[14px] ">{{Request::url()}}</p>
                        </div>
                        <div class="flex justify-end gap-6">
                            <button class="py-2 px-4 bg-white border-[#30bdff] border-[1px]" onclick="onShowModal('onShowModalLink')">
                                <p class="text-[#30bdff] text-[14px]">Cancel</p>
                            </button>
                            <button class="py-2 px-4 bg-[#30bdff] border-[#30bdff] border-[1px]">
                                <p class="text-[#ffffff] text-[14px]">Copy Link</p>
                            </button>
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
    const modalContainer = document.getElementById("modal-container")
    const modalComponent = document.getElementById("static-modal")
    const tabButton = document.getElementById("share-tab-button")
    const shareLinkModal = document.getElementById("share-link-website")
    const multiShareLinkModal = document.getElementById("multi-share-modal")

    const onShowModal = (type) => {
        if (type === 'onShowModalLink') {
            if(modalComponent.classList.contains("hidden")) {
                modalComponent.classList.remove("hidden")
            } else {
                modalComponent.classList.add("hidden")
            }
            if (shareLinkModal.classList.contains("hidden")) {
                shareLinkModal.classList.remove("hidden")
            } else {
                shareLinkModal.classList.add("hidden")
            }
            if (!multiShareLinkModal.classList.contains("hidden")) {
                multiShareLinkModal.classList.add("hidden")
            } 
        } else if (type === 'onShowModalMulti') {
            if (multiShareLinkModal.classList.contains("hidden")) {
                multiShareLinkModal.classList.remove("hidden")
            } else {
                multiShareLinkModal.classList.add("hidden")
            }
            if(modalComponent.classList.contains("hidden")) {
                modalComponent.classList.remove("hidden")
            } else {
                modalComponent.classList.add("hidden")
            }
        } else if (type === 'onShowModalLinkMulti') {
            if (shareLinkModal.classList.contains("hidden")) {
                shareLinkModal.classList.remove("hidden")
            } else {
                shareLinkModal.classList.add("hidden")
            }
            if (multiShareLinkModal.classList.contains("hidden")) {
                multiShareLinkModal.classList.remove("hidden")
            } else {
                multiShareLinkModal.classList.add("hidden")
            }
        }
    }

    onCloseModalContainer = () => {
        if (!multiShareLinkModal.classList.contains("hidden")) {
            multiShareLinkModal.classList.add("hidden")
        }
        if (modalComponent.classList.contains("hidden")) {
            modalComponent.classList.remove("hidden")
        } else {
            modalComponent.classList.add("hidden")
        }
        if (!shareLinkModal.classList.contains("hidden")) {
            shareLinkModal.classList.add("hidden")
        }
    }

    onShowTabButton = () => {
        if(tabButton.classList.contains("hidden")) {
            tabButton.classList.remove("hidden")
        } else {
            tabButton.classList.add("hidden")
        }
    }
</script>
@endsection('script')