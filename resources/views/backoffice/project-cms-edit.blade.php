@extends('backoffice.layout.cms-layout')

@section('content')
<div class="relative overflow-x-auto h-screen p-4">
    <div class="bg-gray-50 rounded-b-lg rounded-r-lg">
        <form class="p-4" method="post" action="{{route('admin-cms-project-update',[
            'id' => $project->project_id
            ])}}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <label class="block mb-2 text-sm font-medium text-[#C5A47E]" for="file_input">Project Thumbnail</label>
            <label for="project_thumbnail_input" class="mb-6 w-[50%] h-[501px] flex items-center bg-black mx-auto" id="project_thumbnail_preview_container">
                <img alt="" id="project_thumbnail_preview" class="w-100 mx-auto max-h-[480px]" 
                src="{{asset('storage/images/'.$project->project_thumbnail)}}">
            </label>
            <input type="hidden" name="project_thumbnail" value="{{$project->project_thumbnail}}">
            <div class="mb-8">
                <input class="block w-full text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                hidden" 
                aria-describedby="file_input_help" id="project_thumbnail_input" type="file" 
                onchange="loadFile(event,'project_thumbnail_input','project_thumbnail_preview')" 
                name="project_thumbnail_input" accept="image/*">
                <p class="mt-1 text-sm text-gray-500 " id="file_input_help">PNG, JPG (RECOMENDED. 646X501), max: 2MB.</p>
                @error('project_thumbnail_input')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="project_title" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Title</label>
                <input type="text" id="project_title" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                " 
                placeholder="Title" required name="project_title" value="{{$project->project_title}}">
                @error('project_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="mb-4">
                <label for="project_category" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Catgory</label>
                <input type="text" id="project_category" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                " 
                placeholder="Category" required name="project_category" value="{{$project->project_category}}">
                @error('project_category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <label class="block mb-2 text-sm font-medium text-[#C5A47E]" for="file_input">Project Content Image</label>
            <label for="project_content_image_input" class="mb-6 w-[70%] h-[501px] flex items-center bg-black mx-auto" id="project_content_image_preview_container">
                <img src="{{asset('storage/images/'.$project->project_content_image)}}" alt="" id="project_content_image_preview" class="w-100 mx-auto max-h-[480px]">
            </label>
            <input type="hidden" name="project_content_image" value="{{$project->project_content_image}}">
            <div class="mb-8">
                <input class="block w-full text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                hidden" 
                aria-describedby="file_input_help" id="project_content_image_input" type="file" 
                onchange="loadFile(event,'project_content_image_input','project_content_image_preview')" 
                name="project_content_image_input" accept="image/*">
                <p class="mt-1 text-sm text-gray-500 " id="file_input_help">PNG, JPG (RECOMENDED. 1354x800), max: 2MB.</p>
                @error('project_content_image_input')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <textarea id="editor" name="project_body">
                {{$project->project_body}}
            </textarea>
            @error('project_body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="flex justify-end gap-4">
                <a href="{{route('admin-cms-project-list')}}">
                    <button class="rounded-[4px] py-[11px] px-[20px] bg-gray-500 gap-[20px] items-center mt-[42px]" type="button">
                        <p class="text-center text-[15px] text-[#FFF]">Cancel</p>
                    </button>
                </a>
                <button class="rounded-[4px] py-[11px] px-[20px] bg-[#CF960A] gap-[20px] items-center mt-[42px]" type="submit">
                    <p class="text-center text-[15px] text-[#FFF]">Save</p>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection


@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

    var loadFile = function(event, inputId, PreviewId) {    
        var fileName = document.getElementById(inputId);
        var output = document.getElementById(PreviewId);
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            fileName.innerHTML = event.target.files[0].name;
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endsection
