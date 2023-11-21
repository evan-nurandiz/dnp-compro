@foreach($projects as $project)
<a href="{{route('work-detail', [
    'slug' => $project->project_slug    
])}}" class="col-span-1">
    <img src="{{asset('storage/images/'.$project->project_thumbnail)}}" alt="" class="mb-4 w-full">
    <p class="text-[24px] text-[#fafafa] mb-1">{{$project->project_title}}</p>
    <p class="text-[16px] text-[#adadac] mb-4">{{$project->project_category}}</p>
</a>
@endforeach