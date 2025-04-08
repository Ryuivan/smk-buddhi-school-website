@extends('dashboard.index')
@section('content')
<div class="container ml-[3.5rem] sm:mx-auto px-5 md:px-10 xl:px-20 overflow-x-hidden">
    <h1 class="text-left text-2xl mb-8 sm:text-center font-semibold uppercase mt-16">Achievement</h1>
    @if (session()->has('success'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    </div>
    @endif
    <div class="flex text-left sm:text-center flex-wrap flex-col sm:flex-row sm:justify-between">
        <a href="/dashboard/achievement/create"
        class="transition duration-300 bg-[#315887] hover:bg-[#1C314C] w-44 text-white text-center text-sm px-4 py-2 rounded-md mb-4">
        Add Achievement <i class="fa-solid fa-plus"></i>
        </a>
        <form action="/dashboard/achievement">
            <input type="text" name="search"
                class="text-sm sm:text-base border border-gray-200 rounded-md p-2 focus:outline-none h-9 w-40 md:w-60" placeholder="Search"
                value="{{ request('search') }}">
            <button type="submit"
                class="inline transition duration-300 bg-[#315887] hover:bg-[#1C314C] text-white px-4 py-2 rounded-md mb-4">
                <i class="fa-solid fa-search"></i>
            </button>
        </form>
    </div>
    @if ($prestasis->isEmpty())
    <div class="flex justify-center items-center h-32">
        <span class="text-gray-400 font-medium">Achievement not found</span>
    </div>
    @else

    <div class="flex justify-center flex-wrap">
        @foreach ($prestasis as $prestasi)
        <div
            class="flex flex-col items-center my-5 mx-4 w-[400px] bg-white border border-gray-200 rounded-lg shadow md:flex-row">
            @if ($prestasi->gambar)
            <img class="object-cover w-full rounded-t-lg h-56 md:h-48 md:w-48 md:rounded-none md:rounded-s-lg"
                src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->name }}">
            @else
            <img class="object-cover w-full rounded-t-lg h-56 md:h-48 md:w-48 md:rounded-none leading-normal overflow-y-auto md:rounded-s-lg"
                src="{{ asset('assets/profile/usernull.jpg') }}" alt="{{ $prestasi->name }}">
            @endif
            <div class="flex flex-col w-52 justify-between p-4 leading-normal">
                <h5 class="mb-4 h-16 font-semibold tracking-tight text-gray-900 text-xl">{{ $prestasi->name }}</h5>
                <div class="flex space-x-2 justify-start">
                    <a href="/dashboard/achievement/{{ $prestasi->id }}/edit"
                        class="transition duration-300 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                    <form action="/dashboard/achievement/{{ $prestasi->id }}" method="POST" class="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this achievement?')"
                            class="transition duration-300 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mb-5">
        {{ $prestasis->links() }}
    </div>
    @endif
</div>
@endsection