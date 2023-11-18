@extends('web.layout.header')

@section('title')
<title>{{$project->project_title}} | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
    <div class="py-24 md:py-32 max-w-screen-lg mx-auto">
        <img src="{{asset('storage/images/'.$project->project_content_image)}}" alt="" class="w-full mb-[22px]">
        <div class="px-6">
            <p class="text-[35px] text-[#ffffff] font-bold mb-4">{{$project->project_title}}</p>
            <p class="text-[15px] text-[#b0b0b0] font-normal mb-8">{{$project->project_category}} / {{\Carbon\Carbon::parse($project->created_at)->format('Y')}}</p>
            <p class="text-[20px] text-[#b0b0b0] font-extraLight">
                {!!$project->project_body!!}
            </p>
        </div>
    </div>
</section>
@endsection('content')