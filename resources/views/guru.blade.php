@extends('layouts.main')

@section('content')
<div class="bg-[#9a031e]">
    <div class="container mx-auto px-5 md:px-10 xl:px-20">
        <div class="py-20">
            <h1 class="text-3xl font-semibold text-white lg:text-5xl">Guru</h1>
            <p class="mt-5 text-white text-lg lg:text-lg">Guru yang mengajar siswa-siswi Sekolah Menengah Kejuruan
                Perguruan Buddhi.</p>
        </div>
    </div>
    <div class="bg-[#f7f7f7] p-4">
        @if (!count($teachers))
        <div class="text-center py-5 text-xl font-semibold">Guru tidak ditemukan.</div>
        @endif
        <div class="p-5 md:px-0 m-5 md:mx-0 flex flex-wrap gap-6 justify-center">
            @foreach($teachers as $teacher)
            <div
                class="m-5 bg-white p-5 shadow-md sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/5 rounded-md" data-aos="fade-down">
                @if ($teacher->gambar)
                <img src="{{ asset('storage/' . $teacher->gambar) }}" alt="{{ $teacher->name }} Image"
                    class="w-full h-96 object-cover rounded-md">
                @else
                <img src="{{ asset('assets/profile/usernull.jpg') }}" alt="{{ $teacher->name }} Image"
                    class="w-full h-96 object-cover rounded-md">
                @endif
                <p class="mt-4 text-lg font-semibold">{{ $teacher->name }}</p>
            </div>
            @endforeach
        </div>
        <div style="padding: 0 40px">
            {{ $teachers->links() }}

        </div>
    </div>
</div>
@endsection