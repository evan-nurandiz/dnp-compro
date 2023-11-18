@extends('web.layout.header')

@section('title')
<title>Work | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
    <div class="py-24 md:py-48 max-w-screen-lg mx-auto">
        <div class="grid px-4 gap-6 grid-cols-1 lg:px-0 md:grid-cols-3 lg:gap-12">
            @foreach($projects as $project)
            <a href="{{route('work-detail', [
                'slug' => $project->project_slug    
            ])}}" class="col-span-1">
                <img src="{{asset('storage/images/'.$project->project_thumbnail)}}" alt="" class="mb-4">
                <p class="text-[24px] text-[#fafafa] mb-1">{{$project->project_title}}</p>
                <p class="text-[16px] text-[#adadac] mb-4">{{$project->project_category}}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection('content')