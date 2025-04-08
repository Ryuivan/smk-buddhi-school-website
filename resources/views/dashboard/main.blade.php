@extends('dashboard.index')

@section('content')

<div class="w-full bg-white rounded-lg shadow-md p-4 md:p-6 lg:p-8 xl:p-10 ml-12">
    <div class="w-full bg-cover bg-gray-100 rounded-lg shadow-md p-4 md:p-6 lg:p-8 xl:p-10 ml-auto">
    <div class="grid grid-cols-2 items-center">
            <h1 class="text-2xl md:text-3xl lg:text-5xl xl:text-5xl font-bold mb-2 md:mb-4 lg:mb-6 xl:mb-8 ml-1 whitespace-normal col-span-1">
                Welcome back, @auth {{ auth()->user()->name }} @endauth!
            </h1>
        </div>
        <hr class="h-0.5 md:h-1 bg-gray-200 mb-2 md:mb-4 lg:mb-6 xl:mb-8 ml-1">

        <div class="flex flex-col md:flex-row items-start md:items-center">
            <div class="md:w-1/2">
                <p class="text-gray-600 ml-1 whitespace-normal">
                    Email: @auth {{ auth()->user()->email }} @endauth
                </p>
            </div>
        </div>
    </div>
    
    

</div>

@endsection