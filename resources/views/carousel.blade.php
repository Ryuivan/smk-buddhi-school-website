@extends('layouts.main')

@section('content')
<div class="bg-[#9a031e]">
    <div class="container mx-auto px-5 md:px-10 xl:px-20">
        <div class="py-20">
            <h1 class="text-3xl font-semibold text-white lg:text-5xl">Carousel</h1>
            <p class="mt-5 text-white text-lg lg:text-lg">List Carousel.</p>
        </div>
    </div>
    <div class="bg-[#f7f7f7] p-4">
        <div class="p-5 md:px-0 m-5 md:mx-0 flex flex-wrap gap-6 justify-center ">
            @foreach($carousels as $carousel)
                <div class="m-5 bg-white p-5 shadow-md sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/5">
                    <img src="{{ asset('storage/' . $carousel->gambar) }}" alt="{{ $carousel->name }} Image" class="w-full object-cover rounded-md">
                    <p class="mt-4 text-lg font-semibold">{{ $carousel->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection