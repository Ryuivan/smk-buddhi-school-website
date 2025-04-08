@extends('layouts.main')

@section('content')

<div class="owl-carousel owl-theme w-full">
    @foreach($carousels as $carousel)

    <div class="item">
        <img src="{{ asset('storage/' . $carousel->gambar) }}" alt="{{ $carousel->name }}"
            class="min-w-screen object-cover h-96 brightness-50 h-[650px]">

        <div class="absolute text-white top-1 p-8 md:max-w-lg lg:max-w-xxl lg:top-10 lg:left-10">
            <h1 class="text-white italic text-xl sm:text-2xl md:text-3xl">
                Selamat Datang @auth, {{ auth()->user()->name }}@endauth
            </h1>
            <h1 class="mt-2 text-white font-bold text-3xl md:text-4xl lg:text-5xl">SMK Buddhi Kota Tangerang</h1><br />
            <h5 class="text-white text-justify md:text-left lg:text-lg">SMK Buddhi membentuk manusia yang unggul dalam
                intelektual, terampil dalam bekerja, handal dalam berwirausaha dan terpuji dalam moral.</h5>
        </div>
    </div>

    @endforeach
</div>

<div class="py-8 bg-[#f7f7f7]">
    @if (count($posts))
    <div class="text-center">
        <h1 class="text-4xl font-semibold my-4 text-[#213d5d]">Publikasi</h1>
        <h1 class="text-1xl font-normal mb-4 text-[#213d5d]">Berita, Kegiatan Siswa, dan Artikel Sekolah.</h1>
    </div>

    <div class="flex flex-wrap justify-center py-8">
        @foreach($posts as $post)
        <a href="/publikasi/{{ $post->slug }}">
            <div data-aos="fade-down"
                class="cursor-pointer m-5 min-w-sm max-w-sm max-h-lg min-h-lg bg-white border border-gray-200 rounded-lg hover:shadow-lg hover:scale-105 transition ease-in-out duration-300">
                <a href="/publikasi/{{ $post->slug }}">
                    @if ($post->image)
                    <img class="rounded-t-lg object-cover w-full h-60" src="{{ 'storage/' . $post->image }}"
                        alt="{{ $post->title }}" />
                    @else
                    <img class="rounded-t-lg object-cover w-full h-60" src="{{ asset('assets/profile/imagenull.png') }}"
                        alt="{{ $post->title }}" />
                    @endif
                </a>
                <div class="p-5">
                    <a href="/publikasi/{{ $post->slug }}">
                        <h5 class="mb-2 text-lg sm:text-xl font-semibold tracking-tight text-gray-900 h-28">{{
                            $post->title }}</h5>
                        <!-- <p class="mb-3 font-normal text-gray-700 text-justify h-52">{{ $post->excerpt }}</p> -->
                        <div class="flex justify-between text-xs mt-10">
                            <h5><i class="fa-solid fa-clock"></i> {{ $post->timeAgo()}}</h5>
                            <h5>{{ $post->category->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="flex justify-center">
        <a href="/publikasi"
            class="transition duration-300 ease-in-out py-3 px-6 text-center text-white bg-red-500 rounded-md hover:bg-red-600">Lihat
            Publikasi <i class="fa-solid fa-arrow-right text-sm"></i>
        </a>
    </div>
    @endif
</div>

<div class="py-8 bg-[#f7f7f7]">
    @if (count($prestasis))
    <div class="text-center">
        <h1 class="text-4xl my-4 text-[#213d5d] font-semibold">Prestasi Siswa</h1>
        <h1 class="mb-4 text-[#213d5d] font-normal">Galeri prestasi yang diraih oleh siswa-siswi SMK Buddhi.</h1>
    </div>
    <div class="flex flex-wrap justify-center py-8">
        @foreach($prestasis as $prestasi)
        <div data-aos="fade-down" class="bg-white m-5 p-5 shadow-md w-[300px] rounded-md">
            <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->name }} Image"
                class="w-full object-cover rounded-md h-80">
            <p class="mt-4 text-lg font-semibold">{{ $prestasi->name }}</p>
        </div>
        @endforeach
    </div>
    <div class="flex justify-center">
        <a href="/prestasi"
            class="transition duration-300 ease-in-out py-3 px-6 text-center text-white bg-red-500 rounded-md hover:bg-red-600">Lihat
            Prestasi <i class="fa-solid fa-arrow-right text-sm"></i></a>
    </div>
    @endif
</div>

<script type="text/javascript">
    $(".owl-carousel").owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            touchDrag: false,
            mouseDrag: false,
            autoplay: true,
            autoplayTimeout: 3000,
            items: 1,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });
</script>

@endsection