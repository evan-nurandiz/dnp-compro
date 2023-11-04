@extends('backoffice.layout.cms-layout')

@section('content')
<div class="relative overflow-x-auto h-screen p-4">
    <div class="bg-gray-50 rounded-b-lg rounded-r-lg">
        <form class="p-4" method="post" action="{{route('admin-cms-contact-update')}}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="mb-4">
                <label for="email" class="block mb-4 text-sm font-medium text-[#C5A47E]">email</label>
                <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                " 
                placeholder="Title" required name="email" value="{{$content['content']->email}}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="grid grid-cols-2 gap-8">
                <div class="col-span-1">
                    <div class="mb-4">
                        <label for="phonenumber_1" class="block mb-4 text-sm font-medium text-[#C5A47E]">Phone Number 1</label>
                        <input type="text" id="phonenumber_1" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Category" required name="phonenumber_1" value="{{$content['content']->phonenumber_1}}">
                        @error('phonenumber_1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> 
                </div>
                <div class="col-span-1">
                    <div class="mb-4">
                        <label for="phonenumber_2" class="block mb-4 text-sm font-medium text-[#C5A47E]">Phone Number 2</label>
                        <input type="text" id="phonenumber_2" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Category" required name="phonenumber_2" value="{{$content['content']->phonenumber_2}}">
                        @error('phonenumber_2')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> 
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <div class="mb-4">
                        <label for="instagram_link" class="block mb-4 text-sm font-medium text-[#C5A47E]">Instagram</label>
                        <input type="text" id="instagram_link" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Category" required name="instagram_link" value="{{$content['content']->instagram_link}}">
                        @error('instagram_link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> 
                </div>
                <div class="col-span-1">
                    <div class="mb-4">
                        <label for="facebook_link" class="block mb-4 text-sm font-medium text-[#C5A47E]">Facebook</label>
                        <input type="text" id="facebook_link" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Category" required name="facebook_link" value="{{$content['content']->facebook_link}}">
                        @error('facebook_link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> 
                </div>
                <div class="col-span-1">
                    <div class="mb-4">
                        <label for="behance_link" class="block mb-4 text-sm font-medium text-[#C5A47E]">Behance</label>
                        <input type="text" id="behance_link" class="bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                        " 
                        placeholder="Category" required name="behance_link" value="{{$content['content']->behance_link}}">
                        @error('behance_link')
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
