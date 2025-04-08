@extends('layouts.main')

@section('content')

<div class="bg-[#9a031e]">
    <div class="container mx-auto px-5 md:px-10 xl:px-20">
        <div class="py-20">
            <h1 class="text-3xl font-semibold text-white lg:text-5xl">Publikasi</h1>
            <p class="mt-5 text-white text-lg lg:text-lg">Sarana informasi yang memuat berita, prestasi, dan kegiatan
                sekolah di lingkungan SMK Buddhi.</p>
        </div>
    </div>
    <div class="bg-[#f7f7f7] p-4">
        @if (!count($posts))
        <div class="text-center py-5 text-xl font-semibold">Publikasi tidak ditemukan.</div>
        @endif
        <div class="p-5 md:px-0 m-5 md:mx-0">
            <form action="/publikasi" class="flex justify-center mb-8">
                <input type="text" name="search" class="form-input w-full sm:w-1/2 h-10 border border-gray-300"
                    placeholder="Cari Publikasi..." value="{{ request('search') }}">
                    <button type="submit"
                class="inline transition duration-300 bg-[#315887] hover:bg-[#1C314C] text-white px-4 py-2">
                <i class="fa-solid fa-search"></i>
            </button>
            </form>
            <div class="flex flex-wrap gap-6 justify-center">
                @foreach($posts as $post)
                <a href="/publikasi/{{ $post->slug }}">
                    <div data-aos="fade-down"
                        class="cursor-pointer m-5 min-w-sm max-w-sm max-h-lg min-h-lg bg-white border border-gray-200 rounded-lg hover:shadow-lg hover:scale-105 transition ease-in-out duration-300">
                        <a href="/publikasi/{{ $post->slug }}">
                            @if ($post->image)
                            <img class="rounded-t-lg object-cover w-full h-60" src="{{ 'storage/' . $post->image }}"
                                alt="{{ $post->title }}" />
                            @else
                            <img class="rounded-t-lg object-cover w-full h-60"
                                src="{{ asset('assets/profile/imagenull.png') }}" alt="{{ $post->title }}" />
                            @endif
                        </a>
                        <div class="p-5">
                            <a href="/publikasi/{{ $post->slug }}">
                                <h5
                                    class="mb-2 text-base sm:text-xl md:text-xl lg:text-xl font-semibold tracking-tight text-gray-900 h-28">
                                    {{
                                    $post->title }}</h5>
                            </a>
                            <!-- <p class="mb-3 font-normal text-gray-700 text-justify h-52">{{ $post->excerpt }}</p> -->
                            <div class="flex justify-between text-xs mt-10">
                                <h5><i class="fa-solid fa-clock"></i> {{ $post->timeAgo() }}</h5>
                                <h5>{{ $post->category->name }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        {{ $posts->links() }}
    </div>
</div>

@endsection