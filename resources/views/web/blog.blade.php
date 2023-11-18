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
        @foreach($blogs as $blog)
        <div class="">
            <x-BlogCard :data=$blog/>
        </div>
        @endforeach
    </div>
</section>
@endsection('content')