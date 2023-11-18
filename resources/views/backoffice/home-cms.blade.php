@extends('backoffice.layout.cms-layout')

@section('style')
<link
    href="https://unpkg.com/@yaireo/tagify/dist/tagify.css"
    rel="stylesheet"
    type="text/css"
/>
@endsection


@section('content')
<div class="relative overflow-x-auto h-screen p-4">
    <div class="bg-gray-50 rounded-b-lg rounded-r-lg">
        <form class="p-4" method="post" action="{{route('admin-cms-contact-update')}}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="mb-4">
                <label for="main_title" class="block mb-4 text-sm font-medium text-[#C5A47E]">Main Title</label>
                <textarea id="editor" name="main_title">{!! $content['content']->main_title !!}</textarea>
                @error('main_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="mb-4">
                <label for="main_title_moving_text" class="block mb-4 text-sm font-medium text-[#C5A47E]">Running Text</label>
                <input
                    type="text"
                    class="w-full px-4 py-6 text-sm border border-gray-300 rounded outline-none"
                    name="main_title_moving_text"
                    value="{{$content['content']->main_title_moving_text}}"
                />
                @error('main_title_moving_text')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="grid grid-cols-2 gap-8">
                <div class="mb-8 col-span-1">
                    <label for="main_title_moving_text" class="block mb-4 text-sm font-medium text-[#C5A47E]">Work Highlight 1</label>
                    <div class="mb-6">
                        <label for="work_example_1_thumbnail_input" class="mb-6 w-[70%] h-[350px] flex items-center bg-black mx-auto" id="work_example_1_thumbnail_preview_container">
                            <img src="{{asset('storage/images/'.$content['content']->work_example_1_thumbnail)}}" alt="" id="work_example_1_thumbnail_preview" class="w-100 mx-auto max-h-[480px]">
                        </label>
                        <input type="hidden" name="work_example_1_thumbnail" value="{{$content['content']->work_example_1_thumbnail}}">
                        <input class="block w-full text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                        hidden" 
                        aria-describedby="work_example_1_thumbnail" id="work_example_1_thumbnail_input" type="file" 
                        onchange="loadFile(event,'work_example_1_thumbnail_input','work_example_1_thumbnail_preview')" 
                        name="work_example_1_thumbnail_input" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500 " id="work_example_1_thumbnail">PNG, JPG (RECOMENDED. 381x286), max: 2MB.</p>
                        @error('work_example_1_thumbnail_input')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_1_title" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Title</label>
                        <input type="text" id="work_example_1_title" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Title" required name="work_example_1_title" value="{{$content['content']->work_example_1_title}}">
                        @error('work_example_1_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_1_description" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Description</label>
                        <input type="text" id="work_example_1_description" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Title" required name="work_example_1_description" value="{{$content['content']->work_example_1_description}}">
                        @error('work_example_1_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-8 col-span-1">
                    <label for="main_title_moving_text" class="block mb-4 text-sm font-medium text-[#C5A47E]">Work Highlight 2</label>
                    <div class="mb-6">
                        <label for="work_example_2_thumbnail_input" class="mb-6 w-[70%] h-[350px] flex items-center bg-black mx-auto" id="work_example_2_thumbnail_preview_container">
                            <img src="{{asset('storage/images/'.$content['content']->work_example_2_thumbnail)}}" alt="" id="work_example_2_thumbnail_preview" class="w-100 mx-auto max-h-[480px]">
                        </label>
                        <input type="hidden" name="work_example_2_thumbnail" value="{{$content['content']->work_example_2_thumbnail}}">
                        <input class="block w-full text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                        hidden" 
                        aria-describedby="work_example_2_thumbnail" id="work_example_2_thumbnail_input" type="file" 
                        onchange="loadFile(event,'work_example_2_thumbnail_input','work_example_2_thumbnail_preview')" 
                        name="work_example_2_thumbnail_input" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500 " id="work_example_2_thumbnail">PNG, JPG (RECOMENDED. 381x286), max: 2MB.</p>
                        @error('work_example_2_thumbnail_input')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_2_title" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Title</label>
                        <input type="text" id="work_example_2_title" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Title" required name="work_example_2_title" value="{{$content['content']->work_example_2_title}}">
                        @error('work_example_2_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_2_description" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Description</label>
                        <input type="text" id="work_example_2_description" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Title" required name="work_example_2_description" value="{{$content['content']->work_example_2_description}}">
                        @error('work_example_2_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-8 col-span-2">
                    <label for="main_title_moving_text" class="block mb-4 text-sm font-medium text-[#C5A47E]">Work Highlight 3</label>
                    <div class="mb-6">
                        <label for="work_example_3_thumbnail_input" class="mb-6 w-[70%] flex items-center bg-black mx-auto" id="work_example_3_thumbnail_preview_container">
                            <img src="{{asset('storage/images/'.$content['content']->work_example_3_thumbnail)}}" alt="" id="work_example_3_thumbnail_preview" class="w-100 mx-auto max-h-[480px]">
                        </label>
                        <input type="hidden" name="work_example_3_thumbnail" value="{{$content['content']->work_example_3_thumbnail}}">
                        <input class="block w-full text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                        hidden" 
                        aria-describedby="work_example_3_thumbnail" id="work_example_3_thumbnail_input" type="file" 
                        onchange="loadFile(event,'work_example_3_thumbnail_input','work_example_3_thumbnail_preview')" 
                        name="work_example_3_thumbnail_input" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500 " id="work_example_3_thumbnail">PNG, JPG (RECOMENDED. 784x441), max: 2MB.</p>
                        @error('work_example_3_thumbnail_input')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_3_title" class="block mb-4 text-sm font-medium text-[#C5A47E]">Work Highlight Title 3</label>
                        <input type="text" id="work_example_3_title" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="work highlight 3" required name="work_example_3_title" value="{{$content['content']->work_example_3_title}}">
                        @error('work_example_3_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_3_description" class="block mb-4 text-sm font-medium text-[#C5A47E]">Work Highlight Description 3</label>
                        <input type="text" id="work_example_3_description" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Title" required name="work_example_3_description" value="{{$content['content']->work_example_3_description}}">
                        @error('work_example_3_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-8 col-span-1">
                    <label for="main_title_moving_text" class="block mb-4 text-sm font-medium text-[#C5A47E]">Work Highlight 4</label>
                    <div class="mb-6">
                        <label for="work_example_4_thumbnail_input" class="mb-6 w-[70%] h-[350px] flex items-center bg-black mx-auto" id="work_example_4_thumbnail_preview_container">
                            <img src="{{asset('storage/images/'.$content['content']->work_example_4_thumbnail)}}" alt="" id="work_example_4_thumbnail_preview" class="w-100 mx-auto max-h-[480px]">
                        </label>
                        <input type="hidden" name="work_example_4_thumbnail" value="{{$content['content']->work_example_4_thumbnail}}">
                        <input class="block w-full text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                        hidden" 
                        aria-describedby="work_example_4_thumbnail" id="work_example_4_thumbnail_input" type="file" 
                        onchange="loadFile(event,'work_example_4_thumbnail_input','work_example_4_thumbnail_preview')" 
                        name="work_example_4_thumbnail_input" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500 " id="work_example_4_thumbnail">PNG, JPG (RECOMENDED. 381x286), max: 2MB.</p>
                        @error('work_example_4_thumbnail_input')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_4_title" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Title</label>
                        <input type="text" id="work_example_4_title" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="work example 4 title" required name="work_example_4_title" value="{{$content['content']->work_example_4_title}}">
                        @error('work_example_4_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="work_example_4_description" class="block mb-4 text-sm font-medium text-[#C5A47E]">Project Description</label>
                        <input type="text" id="work_example_4_description" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Title" required name="work_example_4_description" value="{{$content['content']->work_example_4_description}}">
                        @error('work_example_4_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-end gap-4">
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
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

    // The DOM element you wish to replace with Tagify
    var input = document.querySelector('input[name=main_title_moving_text]');
    // initialize Tagify on the above input node reference
    new Tagify(input, {
        maxTags: 12,
    });

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
