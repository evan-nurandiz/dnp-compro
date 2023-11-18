@extends('web.layout.header')

@section('title')
<title>Journal | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
<div class="max-w-screen-lg mx-auto py-[160px]">
    <div class="bg-white p-4">
        <div class="flex justify-between mb-10">
            <p class="text-[14px] text-[#5f5e5e] text-extraLight">All Posts</p>
        </div>
        <div class="border-[1px] p-4 border-gray-100 md:px-24 md:py-16">
            <div class="flex justify-between mb-12 items-center">
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
                <img src="{{url('/icon/blog-more-icon.svg')}}" alt="">
            </div>
            <div class="mb-4">
                <p class="text-[28px] text-[#2f2e2e] font-light mb-6">{{$blog->blog_title}}</p>
                <p class="text-[14px] text-[#4c4c4c] font-light">Updated: {{ \Carbon\Carbon::parse($blog->updated_at)->format('M d, Y')}}</p>
            </div>
            {!! $blog->blog_body !!}
            <div class="mt-16">
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="flex gap-8">
                    <a href="">
                        <img src="{{url('/icon/fb-blog-share-icon.svg')}}" alt="">
                    </a>
                    <a href="">
                        <img src="{{url('/icon/twitter-blog-share-icon.svg')}}" alt="">
                    </a>
                    <a href="">
                        <img src="{{url('/icon/linkedin-blog-share-icon.svg')}}" alt="">
                    </a>
                    <a href="">
                        <img src="{{url('/icon/blog-share-icon.svg')}}" alt="">
                    </a>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <div class="flex justify-between items-center">
                <p class="text-[14px] text-[#4c4c4c] font-light">{{$blog->blog_view}} Views</p>
                <img class="w-[19px] h-[19px]" src="{{url('/icon/blog-love-icon.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection('content')