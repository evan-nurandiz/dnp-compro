@extends('web.layout.login')

@section('content')
<section class="bg-[#eec107]">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img src="{{url('/icon/main-logo.png')}}" alt="">
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                @if(session()->has('status'))
                    @if (session()->get('status') == 'fail')
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
                        {{ session()->get('message') }}
                    </div>
                    @elseif (session()->get('status') == 'success')
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                @endif
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Sign in to your account
                </h1>
                <form 
                action="{{route('login-action')}}" method="POST"
                class="space-y-4 md:space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 
                        block w-full p-2.5" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <button type="submit" class="text-white bg-[#eec107] focus:ring-4 
                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
                    text-sm px-4 py-2 text-center mr-3 md:mr-0 w-full">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection