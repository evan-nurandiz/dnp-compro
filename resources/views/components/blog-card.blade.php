<a href="/journal/{{$blog->blog_slug}}" class="bg-white grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-12 border-gray-100 border-[1px]">
    <div class="col-span-2">
        <img src="{{asset('storage/images/'.$blog->blog_thumbnail)}}" alt="" class="w-full">
    </div>
    <div class="col-span-2 px-4 py-8 md:px-0 md:py-8 md:pr-8">
        <div class="h-[93%]">
            <div class="flex gap-2 mb-6 items-center">
                <img src="{{url('/icon/name_icon.png')}}" alt="" class="w-[32px] h-[32px] rounded-full">
                <div>
                    <div class="flex items-center">
                        <p class="text-[#a8a7a7] text-[12px]">Devin GodFrey</p>
                        <img src="{{url('/icon/crown-icon.svg')}}" alt="">
                    </div>
                    <p class="text-[#a8a7a7] text-[12px]"> {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y')}} • {{$blog->read_time}}</p>
                </div>
            </div>
            <p class="text-[22px] text-[#2F2E2E] mb-4 font-light">{{$blog->blog_title}}</p>
            <p class="text-[16px] text-[#2F2E2E] font-extralight">
                We’ve made it quick and convenient for you to manage your blog from anywhere. In this blog post we’ll share the ways you can post to your...
            </p>
        </div>
        <div class="mt-auto">
            <hr class="h-px bg-gray-200 border-0 mb-4">
            <div class="flex">
                <div class="flex gap-8">
                    <p class="text-[10px] text-[#2F2E2E] font-light">14 views</p>
                    <p class="text-[10px] text-[#2F2E2E] font-light">0 comments</p>
                </div>
            </div>
        </div>
    </div>
</a>