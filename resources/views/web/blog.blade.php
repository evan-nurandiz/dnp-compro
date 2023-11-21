@extends('web.layout.header')

@section('title')
<title>Journal | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
<div class="max-w-screen-lg mx-auto py-[160px]">
    <div class="bg-white px-4 py-8">
        <div class="flex justify-between mb-10">
            <p class="text-[14px] text-[#5f5e5e] text-extraLight">All Posts</p>
            <div>
                <img src="{{url('/icon/search-icon-blog.svg')}}" alt="" class="cursor-pointer" id="search-form-toggle" onclick="onShowSearchForm()">
                <form method="get" class="w-full max-w-sm hidden" id="search-form" action="/journal">
                    <div class="flex items-center border-b border-[#9f9e9e] py-2">
                        <img src="{{url('/icon/search-icon-blog.svg')}}" alt="" class="cursor-pointer">
                        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search" name="keyword">
                        <img src="{{url('/icon/search-icon-close.svg')}}" alt=""  class="cursor-pointer" onclick="onShowSearchForm()">
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-col gap-8">
            @foreach($blogs as $blog)
            <x-BlogCard :data=$blog/>
            @endforeach
        </div>
        <nav aria-label="Page navigation example" class="text-right mt-12">
            <ul class="inline-flex -space-x-px text-sm">
                <li class="{{$current_page > 1 ? '' : ' hidden' }}">
                    <a href="/journal?page={{$current_page - 1}}" class="flex items-center justify-center px-3 h-8 ml-0
                    leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 
                    hover:text-gray-700  ">Previous</a>
                </li>
                @for($i = 1; $i <= $total_page; $i++)
                    <li>
                        <a href="/journal?page={{$i}}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 
                        {{ $i == $current_page ? 'bg-blue-50 hover:bg-blue-100 hover:text-blue-700' : 'hover:bg-gray-100 hover:text-gray-700 bg-white' }} border border-gray-300 
                         ">{{$i}}</a>
                    </li>
                @endfor
                <li class="{{$current_page == $total_page ? 'hidden' : ' ' }}">
                <a href="/journal?page={{$current_page + 1}}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg 
                hover:bg-gray-100 hover:text-gray-700   
                ">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
@endsection('content')

@section('script')
<script>
    const searchForm = document.getElementById("search-form")
    const searchFromToggle = document.getElementById("search-form-toggle")

    const onShowSearchForm = () => {
        if (searchForm.classList.contains('hidden')) {
            searchForm.classList.remove("hidden")
            searchFromToggle.classList.add('hidden')
        } else {
            searchForm.classList.add("hidden")
            searchFromToggle.classList.remove('hidden')
        }
    }
</script>
@endsection('script')