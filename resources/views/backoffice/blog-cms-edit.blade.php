@extends('backoffice.layout.cms-layout')

@section('content')
<div class="relative overflow-x-auto h-screen p-4">
    <div class="bg-gray-50 rounded-b-lg rounded-r-lg">
        <form class="p-4" method="post" action="{{route('admin-cms-blog-update', [
            'id' => $blog->blog_id    
        ])}}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <div class="mb-4">
                <label for="blog_title" class="block mb-4 text-sm font-medium text-[#C5A47E]">Blog Title</label>
                <input type="text" id="blog_title" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                " 
                placeholder="Blog Title" required name="blog_title" value="{{$blog->blog_title}}">
                @error('blog_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="mb-4">
                <input type="hidden" name="blog_thumbnail" value="{{$blog->blog_thumbnail}}">
                <label class="block mb-2 text-sm font-medium text-[#C5A47E]" for="file_input">Blog Thumbnail</label>
                <label for="blog_thumbnail_input" class="mb-6 w-[50%] h-[501px] flex items-center bg-black mx-auto" id="blog_thumbnail_preview_container">
                    <img alt="" id="blog_thumbnail_preview" class="w-100 mx-auto max-h-[480px]" 
                    src="{{asset('storage/images/'.$blog->blog_thumbnail)}}">
                </label>
                <div class="mb-8">
                    <input class="block w-full text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                    hidden" 
                    aria-describedby="file_input_help" id="blog_thumbnail_input" type="file" 
                    onchange="loadFile(event,'blog_thumbnail_input','blog_thumbnail_preview')" 
                    name="blog_thumbnail_input" accept="image/*">
                    <p class="mt-1 text-sm text-gray-500 " id="file_input_help">PNG, JPG (RECOMENDED. 646X501), max: 2MB.</p>
                    @error('blog_thumbnail_input')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-[#C5A47E]" for="blog body">Blog Content</label>
                <textarea id="editor" name="blog_body" id="blog_body">{!!$blog->blog_body!!}</textarea>
                @error('blog_body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            ckfinder: {
                uploadUrl: "{{route('admin-image-upload').'?_token='.csrf_token()}}",
            }
        })
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
