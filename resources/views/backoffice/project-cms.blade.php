@extends('backoffice.layout.cms-layout')

@section('content')
<div class="relative overflow-x-auto h-screen p-4">
<div class="bg-gray-50 rounded-b-lg rounded-r-lg">
        <div class="mb-[36px] p-4 flex justify-end items-center">
            <a href="{{route('admin-cms-project-create')}}">
                <button class="rounded-lg py-[11px] px-[36px] bg-[#CF960A] gap-[20px] items-center">
                    <p class="text-center text-[15px] text-[#FFF]">Add</p>
                </button>
            </a>
        </div>
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Project Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Project Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Project Updated At
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
                <tbody>
            </tbody>
            @foreach($projects as $project)
            <tr class="bg-gray-50 border-b last:border-none">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap  h-[150px]">
                    <img src="{{asset('storage/images/'.$project->project_thumbnail)}}" alt="" class="h-[150px]">
                </th>
                <td class="px-6 py-4">
                    {{$project->project_title}}
                </td>
                <td class="px-6 py-4">
                    {{ \Carbon\Carbon::parse($project->updated_at)->format('d M y m:s')}}
                </td>
                <td class="px-6 py-4 text-center flex justify-center items-center mt-auto h-[182.5px]">
                    <a href="{{route('admin-cms-project-edit',[
                        'id' => $project->project_id    
                    ])}}" class="font-medium text-blue-600  mr-4 px-3 py-2 border rounded-lg border-[#2563EB]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <form action="{{route('admin-cms-project-delete',[
                            'id' => $project->project_id    
                        ])}}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button href="{{route('admin-cms-project-delete',[
                            'id' => $project->project_id    
                        ])}}" onclick="return confirm('Are you sure?')" type="submit" data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="flex items-center text-red-700 border border-red-700 font-medium rounded-lg text-sm px-3 py-2 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </thead>
        </table>
    </div>
</div>
@endsection
