@extends('web.layout.header')

@section('title')
<title>Work | Devin&Partners</title>
@endsection('title')

@section('content')
<section>
    <div class="py-24 md:py-48 max-w-screen-lg mx-auto">
        <div class="grid px-4 gap-6 grid-cols-1 lg:px-0 md:grid-cols-3 lg:gap-12" id="work-wrapper">
            @foreach($projects as $project)
            <a href="{{route('work-detail', [
                'slug' => $project->project_slug    
            ])}}" class="col-span-1">
                <img src="{{asset('storage/images/'.$project->project_thumbnail)}}" alt="" class="mb-4 w-full">
                <p class="text-[24px] text-[#fafafa] mb-1">{{$project->project_title}}</p>
                <p class="text-[16px] text-[#adadac] mb-4">{{$project->project_category}}</p>
            </a>
            @endforeach
        </div>
        <div class="px-4 mx-auto mt-8">
            @if($total_page > 1)
                <button onclick="infinteLoadMore()" class="rounded-[21px] mx-auto py-[11px] px-[27px] bg-[#CF960A] flex gap-[20px] items-center" id="next-page">
                    <p class="text-center 
                    xs:text-[12px]
                    md:text-[15px]
                    xl:text-[15px] text-[#FFF]">Next Page</p>
                </button>
            @endif
        </div>
    </div>
</section>
@endsection('content')

@section('script')
<script>
    let ENDPOINT = "{{ url('/') }}";
    let page = "{{$current_page}}";
    let nextPageUrl;
    
    page = parseInt(page,10) + 1;
    function infinteLoadMore() {
        $.ajax({
            url: ENDPOINT + "/work?page=" + page,
            datatype: "html",
            type: "get"
        })
        .done(function (response) {
            nextPageUrl = response.projects.next_page_url;

            if (!nextPageUrl) {
                document.getElementById('next-page').classList.add('hidden');
            }

            page++
            $("#work-wrapper").append(response.html);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.error('Server error occured');
        });
    }
    
</script>
@endsection('script')